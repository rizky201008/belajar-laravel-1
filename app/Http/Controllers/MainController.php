<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{
    public function home()
    {
        return view('home', [
            'title' => 'Home',
            'posts' => Post::all()->sortDesc()
        ]);
    }

    public function about(){
        return view('about', [
            'title' => 'About'
        ]);
    }
}
