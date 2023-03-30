<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\PostCommentsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     //without using the with DATAMEMEER in the   POSTmodel
//     // $posts= Post::latest()->with('category','author')->get();
   
// });
Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}', function (Post $post) {
    // $post = Post::findorFail($post);
    //find a post by its slug and pass it to a view called post
    return view("post",["post" => $post]);
});
Route::get('/categories/{category:slug}',function(Category $category){
    // $posts= Post::all();
    //issue with N+1 Problem
    // return view('posts',["posts" =>$category->posts]);
    //fix the n+1 problem ALONG WITH THE with datamember in the post model
    return view('posts',["posts" =>$category->posts]);
    

});
Route::get('/authors/{author:username}',function(User $author){
    // $posts= Post::all();
    return view('posts',["posts" =>$author->posts]);
    

});
Route::get('register',[RegisterController::class,'create'])->middleware('guest');
Route::post('register',[RegisterController::class,'store'])->middleware('guest');
Route::post('logout',[SessionController::class,'destroy'])->middleware('auth');
Route::get('login',[SessionController::class,'create'])->middleware('guest');
Route::post('login',[SessionController::class,'store'])->middleware('guest');
Route::post('/posts/{post:slug}/comments',[PostCommentsController::class,'store']);
Route::get('admin/posts/create',[PostController::class,'create'])->middleware('admin');
Route::post('admin/posts',[PostController::class,'store'])->middleware('admin');
