<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class PostController extends Controller
{
    //
    public function index(){
        
        return view('posts',["posts" =>Post::latest()->filter(request(['search']))->SimplePaginate(6)->withQueryString(),"categories" => Category::all()]);
    }
    public function create(){
        
        return view('posts.create');
    }
    public function store(){
        $attributes=request()->validate([
            'title' =>['required'],
            'slug' =>['required',Rule::unique('posts','slug')],
            'excerpt' =>['required'],
            'body' =>['required'],
            'category_id' =>['required',Rule::exists('categories','id')]
        ]);
        $attributes['user_id'] =auth()->id();
        Post::create($attributes);
        return redirect('/');
    }
}
