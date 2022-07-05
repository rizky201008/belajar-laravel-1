<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(){
        $category = Category::all();
        return view('admin.index', [
            'title' => 'Tulis Artikel',
            'category' => $category
        ]);
    }
    public function store(Request $request){
        $slug = Str::slug($request->title);
        $post = new Post;
        $post->title = $request->title;
        $post->slug = $slug;
        $post->body = $request->body;
        $post->category_id = $request->catid;
        $post->excerpt = $request->ecpt;
        $post->save();
        return back()->with('success', "Selamat Postingan Anda Sudah Di Publikasikan");
    }
    public function posts(){
        $post = Post::all();
        return view('admin.posts',[
            'title'=>'Postingan',
            'post'=>$post
        ]);
    }
}
