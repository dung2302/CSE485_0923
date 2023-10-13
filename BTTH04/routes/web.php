<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

//Route::get('/home', function () {
//    return view('home');
//});

Route::get('/posts', [PostController::class,"getAllPosts"]);//->name('posts.hi');
// 
//Route::get('/index',[PostController::class,"index"]);
//Route::get('/create',[PostController::class,"create"]);
Route::resource("categories",CategoryController::class);