<?php

use App\Models\Posts;
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

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});
Route::get('/about', function () {
    return view('about',[
        'title' => 'About'
    ]);
});

Route::get('/blog', function () {
    return view('posts',[
        'title' => 'Blog',
        'posts' => Posts::all()
    ]);
});

Route::get('post/{slug}', function ($slug) {
    return view('post', [
        'title' => 'Baca',
        'post' => Posts::find($slug)
    ]);
});