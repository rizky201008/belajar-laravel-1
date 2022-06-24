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

    public function show($id){
        //menampilkan detail data 
        // find(), pluck()
        return view('post', [
            'title' => 'Baca Berita',
            'post' => Post::find($id)
        ]);
    }
}
