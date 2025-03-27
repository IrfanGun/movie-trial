<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('login');
});

Route::get('login', [AuthController::class,'index'])->name('login');
Route::get('register', [AuthController::class,'register'])->name('register');
Route::post('proses_login', [AuthController::class,'proses_login'])->name('proses_login');
Route::get('logout', [AuthController::class,'logout'])->name('logout');

Route::post('proses_register',[AuthController::class,'proses_register'])->name('proses_register');

Route::group(['middleware' => ['auth']], function () {
 
    Route::group(['middleware' => ['loginAuth:user']], function () {
        Route::resource('user', UserController::class);
    });
});

Route::get('/search-movies', [UserController::class, 'searchMovies']);
Route::get('/movie-detail/{imdbID}', [UserController::class, 'movieDetail']);
Route::post('/favorite-movies-post', [MovieController::class, 'addFavoriteMovie']);
Route::get('/favorite-movies', [MovieController::class, 'getFavoriteMovies']);
Route::delete('/favorite-movies/{imdbID}', [MovieController::class,'removeFavoriteMovie']);
Route::get('/movie-detail-fav/{imdbID}',  [MovieController::class,'detailFavoriteMovie']);

