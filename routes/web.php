<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserReviewController;





use App\Models\Film;
use App\Models\User_Review;
// use App\Http\Controllers\LoginController;
// use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('user.status');



//web.php
Route::middleware(['auth', 'userAuth:admin'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('admin.index');
    Route::resource('/admin/films', '\App\Http\Controllers\FilmController');
    Route::get('/admin/films/show', [FilmController::class, 'show'])->name('films.show');
    Route::get('/admin/users/show', [UserController::class, 'show'])->name('users.show');
    Route::get('/admin/films/show', [UserReviewController::class, 'show'])->name('films.show');
    
    Route::get('/admin/films', [FilmController::class, 'create'])->name('films.add');
    Route::post('/admin/films/add', [FilmController::class, 'store'])->name('films.store');
    Route::delete('/admin/films/{id}/delete', [FilmController::class, 'destroy'])->name('films.destroy');
    // Route::get('/user_review/{id}', [UserController::class, 'reviewShow'])->name('user_review.show');
    Route::get('/admin/review_list/reviewShow', [UserReviewController::class, 'reviewShow'])->name('review_list.reviewShow');
    Route::get('/admin/review_list/showReviews', [UserReviewController::class, 'showReviews'])->name('review_list.showReviews');


});

Route::middleware(['auth', 'userAuth:client'])->group(function () {
    Route::get('/client', [HomeController::class, 'client'])->name('client.index');
    Route::get('/film/create/', [FilmController::class, 'create']);
    Route::get('/film/add/', [FilmController::class, 'store']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    
    Route::get('/add_review/{id}', 'UserReviewController@addReview')->name('add_review');
    // Route::post('/add_review/{id}', 'UserReviewController@store')->name('add_review');
 
    Route::post('add_review/{film}', [UserReviewController::class, 'store'])->name('add_review');

    Route::get('/user_review/{id}', [UserReviewController::class, 'reviewShow'])->name('reviews.show');

    Route::get('/user_review/{id}', [UserReviewController::class, 'reviewShow'])->name('reviews.show');

    Route::get('/genre_show/{id}',[UserReviewController::class,'showByGenre'])->name('genre_show');;
    


});