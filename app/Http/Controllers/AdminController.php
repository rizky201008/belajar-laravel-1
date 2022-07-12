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
    public function edit($id){
        $category = Category::all();
        $post=Post::find($id);
        return view('admin.edit',[
            'title'=>'Edit Post',
            'post'=>$post,
            'category'=>$category
        ]);
    }
    public function update(Request $request, $id){
        $validated = $request->validate([
            'title' => 'required',
            'ecpt' => 'required',
            'catid' => 'required',
            'body' => 'required'
        ]);
        $post = Post::find($id);
        $post->title = $validated['title'];
        $post->excerpt = $validated['ecpt'];
        $post->category_id = $validated['catid'];
        $post->body = $validated['body'];
        $post->update();
        return redirect('/admin/posts');
    }
    public function delete($id){
        $post = Post::find($id);
        $post->delete();
        return redirect('/admin/posts');
    }
}
