<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home()
    {
        $post = Post::all();
        return view('home', [
            'title' => 'Home',
            'posts' => $post
        ]);
    }
}
