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

Route::get('/blog',[\App\Http\Controllers\BlogPostController::class,'index']);
Route::get('/blog/create',[\App\Http\Controllers\BlogPostController::class,'create']);
Route::post('/blog/create',[\App\Http\Controllers\BlogPostController::class,'store']);
Route::get('/blog/{blogPost}/detail',[\App\Http\Controllers\BlogPostController::class,'show']);
Route::get(
    '/blog/category/{category}',
    [\App\Http\Controllers\BlogPostController::class,'postsByCategory']
);

Route::get(
    '/blog/user/{user}',
    [\App\Http\Controllers\BlogPostController::class,'postsByUser']
);
