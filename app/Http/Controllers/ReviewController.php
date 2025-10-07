<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;
use App\Models\Review;

class ReviewController extends Controller
{
    /**
     * レビュー作成画面表示
     * @param Recipe 
     * @return src\resources\views\project\reviewcreate.blade.php
     */
    public function create(Recipe $recipe)
    {
        return view('project.reviewcreate')->with('recipe', $recipe);
    }

    /**
     * レビュー登録動作
     * @param Request ポストされたレビュー文
     * @param Recipe
     * @return src\resources\views\project\view.blade.php
     */
    public function post(Request $request, Recipe $recipe)
    {
        $review = new Review();
        $input = $request->input('comment');
        $review->user_id = auth()->id();
        $review->user_name = auth()->user()->name;
        $review->recipe_id = $recipe->recipe_id;
        $review->comment = $input;
        $review->save();

        return redirect()->route('search.show', ['recipe' => $recipe->recipe_id]);
    }
}
