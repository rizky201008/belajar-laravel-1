<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CategoryController extends Controller
{
    public function index()
    {
        //menampilkan detail data 
        // find(), pluck()
        return view('category.categories', [
            'categories' => Category::all(),
            'title' => 'Kategori'
        ]);
    }
    public function show($slug)
    {
        //menampilkan detail data 
        // find(), pluck()
        return view('category.category', [
            'category' => Category::with('post')->where('slug', '=', $slug)->first(),
            'title' => 'Kategori'
        ]);
    }
}
