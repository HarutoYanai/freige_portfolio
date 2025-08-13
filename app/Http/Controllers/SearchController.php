<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Recipe;
use App\Models\RecipeHistory;
use App\Models\Review;
use App\Http\Requests\SearchRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;
use RakutenRws_Client;


class SearchController extends Controller
{
    public function top(RecipeHistory $recipeHistory) {
        //created_atで降順に並べた後、limitで件数制限をかける
        $recipeHistories = $recipeHistory->where('user_id', auth()->id())->orderBy('created_at', 'desc')->Limit(3)->get();
        return view('project.top')->with('recipeHistories', $recipeHistories);
    }

    public function search(Category $category, SearchRequest $request) {
        //楽天APIクライアントの作成
        $client = new RakutenRws_Client();
        $client->setApplicationId(config('app.rakuten_app_id'));
        
        //categoryId取得
        $categoryId = $category->where('category_name', $request['ingredient'])->select('category_id')->first();
        //dd($categoryId['category_id']);
        if (!$categoryId) {
            echo 'そのIDは無効です';
        } else {

            //入力パラメータの指定
            $response = $client->execute('RecipeCategoryRanking', array(
                'categoryId' => $categoryId['category_id'],
    
            ));
    
            if ($response->isOk()) {
                //出力パラメータを変数に格納
                
                foreach($response as $result) {
                    $recipes[] = [
                    'user_id' => auth()->id(),
                    'ingredient' => $request['ingredient'],
                    'recipe_id' => $result['recipeId'],
                    'recipe_title' => $result['recipeTitle'],
                    'recipe_url' => $result['recipeUrl'],
                    'image_url' => $result['mediumImageUrl'],
                    //'recipe_description' => $result['recipeDescription'],
                    'recipe_material' => $result['recipeMaterial'],
                    //'recipe_indication' =>$result['recipeCost'],
                    //'recipe_cost' => $result['recipeCost'],
                    //'recipe_publishday' => $result['recipePublishday'],
                    'rank' => $result['rank'],
                    ];
                }
                //dd($recipes);
                
                //recipesテーブルに保存
                foreach($recipes as $data) {
                    //データが既に格納されているかチェック
                    $existing = Recipe::where('user_id', $data['user_id'])->where('recipe_id', $data['recipe_id'])->first();
                    
                    if($existing) {
                        $existing->fill($data)->update();
                    } else {
                        $recipe = new Recipe;
                        $recipe->fill($data)->save();
                    }
                }
                
                //view表示
                return view('project.index')->with('recipes', $recipes);
                
            } else  {
                echo 'Error:'. $response->getMessage();
            }
        }
    }
    
    public function show(Recipe $recipe) {
        //recipe_historyテーブルに格納
        $existing = RecipeHistory::where('user_id', $recipe['user_id'])->where('recipe_id', $recipe['recipe_id'])->first();
        if ($existing) {
            $existing->fill($recipe->only(['user_id', 'recipe_id', 'recipe_title', 'image_url']))->update();
        } else {
            $recipeHistory = new RecipeHistory;
            $recipeHistory->fill($recipe->only(['user_id', 'recipe_id', 'recipe_title', 'image_url']))->save();
        }

        $review = new Review;
        $reviews = $review->where('recipe_id', $recipe->recipe_id)->orderBy('created_at', 'desc')->limit(3)->get();
        return view('project.view', compact('recipe', 'reviews'));
       
    }
    
}
