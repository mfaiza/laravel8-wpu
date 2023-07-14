@extends('layouts.app')
@section('body')

<h1>Ini Halaman Post</h1>

@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-3">
    <h2><a class="text-decoration-none" href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    <p>By <a href="/author/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {{ $post->excerpt }}
    <p><a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a></p>
</article>
@endforeach

@endsection


