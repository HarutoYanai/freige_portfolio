<?php

use App\Http\Controllers\SearchController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('project.top');
})->middleware(['auth', 'verified'])->name('dashboard'); */

Route::controller(SearchController::class)->middleware(['auth'])->group(function(){
    Route::get('/dashboard', 'top')->name('dashboard');
    Route::get('/', 'top')->name('top');
    Route::get('/search', 'search')->name('search');
    Route::get('/search/{recipe}', 'show')->name('search.show');
});

Route::controller(ReviewController::class)->middleware(['auth'])->group(function(){
    Route::get('/review/{recipe}/create', 'create')->name('review.create');
    Route::post('/review/{recipe}/post', 'post')->name('review.post');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
