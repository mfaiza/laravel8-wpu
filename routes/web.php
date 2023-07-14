<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});
Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Mochamad Faiz Alamsyah",
        "no_telp" => "081212697894",
    ]);
});

Route::get('/posts', [PostsController::class, 'index']);

Route::get('/posts/{post:slug}', [PostsController::class, 'show']);

Route::get('/categories', function(){
    return view('categories', [
        "title" => "Category : ",
        "category" => Category::all(),
    ]);
});
Route::get('/categories/{category:slug}', function(Category $category){
    return view('category', [
        "title" => $category->name,
        "posts" => $category->posts,
        "category" => $category->name,
    ]);
});

Route::get('/author/{user:username}', function(User $user){
    return view('author', [
        "title" => "Author Posts",
        "name" => $user->name,
        "posts" => $user->posts,
    ]);
});
