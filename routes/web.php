<?php

use Illuminate\Support\Facades\Route;

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
 


Route::prefix('/admin')->group(function()
{
    Route::get('/login', [App\Http\Controllers\ConnectController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\ConnectController::class, 'post_login'])->name('login');
    Route::get('/logout', [App\Http\Controllers\ConnectController::class, 'logout'])->name('logout');

    Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');
    Route::get('/movies', [App\Http\Controllers\DashboardController::class, 'all_movies'])->name('all movies');
    Route::get('/movie/{id}', [App\Http\Controllers\DashboardController::class, 'get_movie_see'])->name('see movies');
    Route::post('/movies/add', [App\Http\Controllers\DashboardController::class, 'post_movie_add'])->name('add movies');
    Route::post('/movies/{id}/link/add', [App\Http\Controllers\DashboardController::class, 'post_link_movie_add'])->name('add links');
    Route::post('/movies/{id}/category/add', [App\Http\Controllers\DashboardController::class, 'post_category_movie_add'])->name('add category');
    Route::get('/categories', [App\Http\Controllers\CategoryController::class, 'getHome'])->name('all categories');
    Route::post('/categories', [App\Http\Controllers\CategoryController::class, 'postCategoryAdd'])->name('all categories');

});

    

    Route::get('/', [App\Http\Controllers\ContentController::class, 'home'])->name('cartelera');
    Route::get('/movie/{id}', [App\Http\Controllers\ContentController::class, 'get_movie'])->name('ver Pelicula');
    Route::get('/api/{page}', [App\Http\Controllers\DashboardController::class, 'apiMovies'])->name('ver Pelicula');


   
