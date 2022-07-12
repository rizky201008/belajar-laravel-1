<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
    public function categories(){
        $category = Category::all();
        return view('admin.categories',[
            'title'=>'Kategori',
            'category'=>$category
        ]);
    }
    public function cedit($id){
        $category = Category::find($id);
        return view('admin.cedit',[
            'title'=>'Edit Kategori',
            'category'=>$category
        ]);
    }
    public function cupdate(Request $request, $id){
        $slug = Str::slug($request->kategori);
        $category = Category::find($id);
        $category->name = $request['kategori'];
        $category->slug = $slug;
        $category->update();
    }
    public function cdelete($id){
        $category = Category::find($id);
        $category->delete();
        return redirect('/admin/categories');
    }
    public function cadd(){
        return view('admin.cadd',[
            'title'=>'Tambah Kategori'
        ]);
    }
    public function cstore(Request $request){
        $slug = Str::slug($request->kategori);
        $category = new Category;
        $category->name = $request['kategori'];
        $category->slug = $slug;
        $category->save();
    }
    public function login(){
        return view('admin.login',[
            'title'=>'Login'
        ]);
    }
    public function authenticate(Request $request){
        $authcred = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        if (Auth::attempt($authcred)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->with('error', 'Gagal Login!!!');
    }
    public function logout(){
        Session::flush();

        Auth::logout();

        return redirect('/admin/login');
    }
}
