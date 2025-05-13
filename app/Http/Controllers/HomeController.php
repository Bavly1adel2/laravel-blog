<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $posts = Post::with('category')->latest()->paginate(3);

        return view('home.index', compact('posts',));
    }
    public function about(){
        return view('about');
    }

public function category(){

    return view('category');
}

public function show($slug)
{
    $category = category::where('slug', $slug)->firstOrFail();
    $posts = post::where('category_id', $category->id)->latest()->paginate(6); // example

    return view('category', compact('category', 'posts'));
}


public function postsdetails($id)
{
    $post = Post::with('category')->findOrFail($id); // Eager load the category
    return view('postsdetails', compact('post'));
}


}
