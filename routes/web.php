<?php
//ルート一覧

use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



// SeachControllerへのルート
Route::controller(SearchController::class)->middleware(['auth'])->group(function () {
    Route::get('/dashboard', 'top')->name('dashboard');
    Route::get('/', 'top')->name('top');
    Route::get('/search', 'search')->name('search');
    Route::get('/search/{recipe}', 'show')->name('search.show');
});

//ReviewControllerへのルート
Route::controller(ReviewController::class)->middleware(['auth'])->group(function () {
    Route::get('/review/{recipe}/create', 'create')->name('review.create');
    Route::post('/review/{recipe}/post', 'post')->name('review.post');
});

//ProfileControllerへのルート
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
