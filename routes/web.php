<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/posts', function () {
    $blog_posts = [
        [
            'title' => "Post pertama",
            'slug' => 'post-pertama',
            'author' => 'Faiz Alam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In temporibus excepturi fugiat esse voluptas ipsa quidem pariatur, officia neque harum. Sequi odio cumque alias! Enim eligendi rerum, optio hic magnam molestiae atque quasi consectetur alias aspernatur asperiores! Nihil enim omnis ducimus libero modi porro quam voluptas aperiam alias dicta! Minima, voluptatum cum aliquid optio nesciunt eius, est atque, eveniet nam veritatis laboriosam excepturi necessitatibus rem cupiditate enim neque? Quam modi repellat neque rem illum quaerat eos totam corporis molestias eius!'
        ],
        [
            'title' => "Post Kedua",
            'slug' => "post-kedua",
            'author' => 'Cusson Baby',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi excepturi facere natus quod eos sunt dolorum possimus asperiores officiis voluptatibus, corrupti deleniti obcaecati vel nobis voluptatem amet? Harum dicta quibusdam amet totam, placeat mollitia labore consequatur quam qui. Et voluptatum impedit blanditiis corporis libero dolorum? Esse distinctio facere tenetur, possimus veniam vel aut tempore animi laborum. Ullam veritatis tempora, doloremque consequatur dolorem exercitationem numquam eos illum fugiat repudiandae facere at unde cum modi iusto dicta rerum officia culpa quod sed temporibus quia. Consequuntur quibusdam id ipsam pariatur, dolorum, minima exercitationem enim eum tempora, quam eius libero? Eum harum vero libero!'
        ]
    ];

    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

Route::get('/posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            'title' => "Post pertama",
            'slug' => 'post-pertama',
            'author' => 'Faiz Alam',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. In temporibus excepturi fugiat esse voluptas ipsa quidem pariatur, officia neque harum. Sequi odio cumque alias! Enim eligendi rerum, optio hic magnam molestiae atque quasi consectetur alias aspernatur asperiores! Nihil enim omnis ducimus libero modi porro quam voluptas aperiam alias dicta! Minima, voluptatum cum aliquid optio nesciunt eius, est atque, eveniet nam veritatis laboriosam excepturi necessitatibus rem cupiditate enim neque? Quam modi repellat neque rem illum quaerat eos totam corporis molestias eius!'
        ],
        [
            'title' => "Post Kedua",
            'slug' => "post-kedua",
            'author' => 'Cusson Baby',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi excepturi facere natus quod eos sunt dolorum possimus asperiores officiis voluptatibus, corrupti deleniti obcaecati vel nobis voluptatem amet? Harum dicta quibusdam amet totam, placeat mollitia labore consequatur quam qui. Et voluptatum impedit blanditiis corporis libero dolorum? Esse distinctio facere tenetur, possimus veniam vel aut tempore animi laborum. Ullam veritatis tempora, doloremque consequatur dolorem exercitationem numquam eos illum fugiat repudiandae facere at unde cum modi iusto dicta rerum officia culpa quod sed temporibus quia. Consequuntur quibusdam id ipsam pariatur, dolorum, minima exercitationem enim eum tempora, quam eius libero? Eum harum vero libero!'
        ]
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Post",
        "post" => $new_post,
    ]);
});
