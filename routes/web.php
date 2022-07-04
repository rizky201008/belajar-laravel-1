<?php

use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [MainController::class, 'home']);

Route::get('/about', [MainController::class, 'about']);

Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{slug}', [PostController::class, 'show']);

Route::get('/category', [CategoryController::class, 'index']);

Route::get('/category/{slug}', [CategoryController::class, 'show']);

Route::get('/login', [LoginController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);

Route::get('/admin/posts', [AdminController::class, 'posts']);
Route::post('/admin', [AdminController::class, 'store']);