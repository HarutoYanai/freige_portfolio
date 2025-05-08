<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RecipeHistory;
use App\Models\Review;

class ReviewController extends Controller
{
    public function create(RecipeHistory $recipe) {
        return view('project.reviewcreate')->with('recipe', $recipe);
    }

    public function post(Request $request, RecipeHistory $recipe) {
        $review = new Review();
        $input = $request->input('comment');
        $review->user_id = auth()->id();
        $review->user_name = auth()->user()->name;
        $review->recipe_id = $recipe->recipe_id;
        $review->comment = $input;
        $review->save();
        
        //dd($recipe->recipe_id);
        return redirect()->route('search.show', ['recipe' => $recipe->recipe_id]);
    }
}
