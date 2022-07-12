<?php

use App\Models\Posts;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
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

Route::get('/admin', [AdminController::class, 'create'])->middleware('auth');

Route::get('/admin/logout', [AdminController::class, 'logout'])->middleware('auth');

Route::get('/admin/posts', [AdminController::class, 'posts'])->middleware('auth');

Route::get('/admin/categories', [AdminController::class, 'categories'])->middleware('auth');

Route::post('/admin', [AdminController::class, 'store']);

Route::get('/admin/posts/edit/{id}', [AdminController::class, 'edit'])->middleware('auth');

Route::post('/admin/posts/edit/{id}', [AdminController::class, 'update']);

Route::get('/admin/posts/delete/{id}', [AdminController::class, 'delete'])->middleware('auth');

Route::get('/admin/categories/add', [AdminController::class, 'cadd'])->middleware('auth');

Route::post('/admin/categories/add', [AdminController::class, 'cstore'])->middleware('auth');

Route::get('/admin/categories/edit/{id}', [AdminController::class, 'cedit'])->middleware('auth');

Route::post('/admin/categories/edit/{id}', [AdminController::class, 'cupdate']);

Route::get('/admin/categories/delete/{id}', [AdminController::class, 'cdelete'])->middleware('auth');

Route::get('/admin/login', [AdminController::class, 'login'])->middleware('guest')->name('login');

Route::post('/admin/login', [AdminController::class, 'authenticate']);