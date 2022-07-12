<?php

namespace App\Http\Controllers;

use App\Models\Post;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index(){
        return view('post.posts', [
            'title' => 'Blog',
            'posts' => Post::all()
        ]);
    }

    public function show($slug){
        //menampilkan detail data 
        // find(), pluck()
        return view('post.post', [
            'post' => Post::with('category')->where('slug','=',$slug)->first(),
            'title' => 'Baca Berita'            
        ]);
    }
}
