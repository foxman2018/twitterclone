<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UserPostsController;
use App\Http\Controllers\AddPostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\CommentController;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/profile', [ProfileController::class, 'store']);

Route::get('/', [PostsController::class, 'index'])->name('posts');

Route::get('/post/{post}', [PostController::class, 'index'])->name('post');
Route::post('/post/{post}', [PostController::class, 'store']);

Route::get('/addpost', [AddPostController::class, 'index'])->name('addpost');
Route::post('/addpost', [AddPostController::class, 'store']);

Route::get('/userposts', [UserPostsController::class, 'index'])->name('userposts');

Route::post('/post/{post}/likes', [PostLikeController::class, 'store'])->name('post.likes');
// Route::delete('/post/{post}/likes', [PostLikeController::class, 'destroy'])->name('post.likes');

Route::post('/post/{post}/comment', [CommentController::class, 'store'])->name('post.comment');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');