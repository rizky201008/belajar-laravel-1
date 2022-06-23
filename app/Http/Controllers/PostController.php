<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        return view('posts', [
            'title' => 'Blog',
            'posts' => Posts::all()
        ]);
    }

    public function show($slug){
        //menampilkan detail data 
        return view('post', [
            'title' => 'Baca Berita',
            'post' => Posts::find($slug)
        ]);
    }
}
