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

Route::get('/', [App\Http\Controllers\HomeController::class, 'show']);


Auth::routes();

Route::get('/post/create', [App\Http\Controllers\PostsController::class, 'create']);
Route::delete('/post/{post}', [App\Http\Controllers\PostsController::class, 'destroy']);
Route::get('/post/{post}', [App\Http\Controllers\PostsController::class, 'show']);
Route::post('/post', [App\Http\Controllers\PostsController::class, 'store']);

Route::get('/post/{post}/comment/create', [App\Http\Controllers\CommentsController::class, 'create']);
Route::post('/comment', [App\Http\Controllers\CommentsController::class, 'store']);


Route::get('/profile/{user}/edit', [App\Http\Controllers\ProfilesController::class, 'edit'])->name('profile.edit');
Route::patch('/profile/{user}',  [App\Http\Controllers\ProfilesController::class, 'update'])->name('profile.update');
Route::get('/profile/{user}', [App\Http\Controllers\ProfilesController::class, 'index'])->name('profile.show');


