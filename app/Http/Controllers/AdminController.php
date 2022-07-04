<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminController extends Controller
{
    public function index(){
        return view('admin.index', [
            'title' => 'Tulis Artikel'
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
}
