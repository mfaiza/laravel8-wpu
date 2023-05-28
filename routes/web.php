<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
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

Route::get('/posts/{slug}', [PostsController::class, 'show']);
