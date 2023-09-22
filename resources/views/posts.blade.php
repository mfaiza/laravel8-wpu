@extends('layouts.app')
@section('body')
    <h1 class="mb-3 text-center">{{ $title }}</h1>

    <div class="row mb-3 justify-content-center">
        <div class="col-md-6">
            <form action="/posts">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search..." name="search"
                        value="{{ request('search') }}">
                    <button class="btn btn-danger" type="submit" id="search">Search</button>
                </div>
            </form>
        </div>
    </div>

    @if ($posts->count())
        <div class="card mb-3">
            @if ($posts[0]->image)
                <div style="max-height: 400px; overflow: hidden">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="img-fluid my-3"
                    alt="{{ $posts[0]->category->name }}">
            @endif
            <div class="card-body text-center   ">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a></h3>
                <p>
                    <small class="text-muted">
                        By <a href="/posts?author={{ $posts[0]->author->username }}"
                            class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a
                            class="text-decoration-none"
                            href="/posts?category={{ $posts[0]->category->slug }}">{{ $posts[0]->category->name }}</a>
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <p><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read More...</a></p>
            </div>
        </div>

        <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="position-absolute px-3 py-2 text-white"
                                style="background-color: rgba(0, 0, 0, 0.3)">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid card-img-top"
                                    alt="{{ $post->category->name }}" style="max-height: 276.8px;">
                            @else
                                <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif

                            <div class="card-body">
                                <h5 class="card-title"><a class="text-decoration-none"
                                        href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h5>
                                <p>By <a href="/posts?author={{ $post->author->username }}"
                                        class="text-decoration-none">{{ $post->author->name }}</a> </p>
                                {{ $post->excerpt }}
                                <p><a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center fs-4">No posts found.</p>
    @endif
    <div class="d-flex justify-content-center">
        {{ $posts->links() }}
    </div>
@endsection

{{-- Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae, facilis!

Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum, distinctio doloremque aut aliquid vero fugit. Cupiditate maiores beatae, repudiandae consequatur quasi autem ipsam vel veritatis nihil, rerum fuga. Mollitia consectetur tempora fuga dolor hic omnis vitae ullam a unde aliquam sapiente quia nam sunt, totam quidem eum magnam ipsum id accusantium aliquid. Aliquid rerum iusto vitae iste repellendus consequatur. Nemo aut cupiditate illo neque vel iusto vitae laboriosam dolores sequi odio magni voluptatem, sed, minima ea praesentium ex est quo a omnis cum adipisci, soluta voluptate eligendi ad! Ut nihil minus in, harum distinctio quae fugiat necessitatibus minima ducimus quam officiis, qui nostrum, a nemo fugit recusandae. Illum provident ratione libero quibusdam impedit id reiciendis cumque saepe suscipit, amet sapiente commodi nisi nesciunt placeat dolorem fuga officiis unde dignissimos sit aperiam quidem modi. Veritatis sed, ipsa aliquid hic, possimus quam facere voluptates libero reprehenderit vel nemo dolores inventore doloribus esse. Vero placeat architecto voluptas fugiat? Praesentium illum rerum eligendi incidunt a. Inventore soluta, quo sit amet quod, iure veniam aut libero enim excepturi suscipit sed temporibus, natus autem totam distinctio. Quia dignissimos, cupiditate expedita facilis eaque possimus repellat quidem, fugiat veritatis modi magnam, error natus consectetur quod reiciendis dolores corrupti? --}}