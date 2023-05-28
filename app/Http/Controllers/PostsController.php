<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts', [
            "title" => "Posts",
            "posts" => $posts
        ]);
    }

    public function show($slug)
    {
        $post = Post::find($slug);
        return view('post', [
            "title" => "Single Post",
            "post" => $post
        ]);
    }
}
