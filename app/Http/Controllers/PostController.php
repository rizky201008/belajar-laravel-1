<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'Blog',
            'posts' => Post::all()
        ]);
    }

    public function show($slug){
        //menampilkan detail data 
        return view('post', [
            'title' => 'Baca Berita',
            'post' => Post::find($slug)
        ]);
    }
}
