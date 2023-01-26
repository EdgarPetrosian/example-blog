<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\MyHomeController;
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

Route::get('/myhome', [MyHomeController::class, 'myHomeContent']);
Route::get('/user', [UserController::class, 'showUserName']);
Route::get('/add_posts', [PostsController::class, 'addPosts']);
Route::get('/show_posts', [PostsController::class, 'showPosts']);
Route::get('/about', [AboutController::class, 'aboutContent']);
Route::get('/', [WelcomeController::class, 'showWelcomeContent']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
