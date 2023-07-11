@extends('layouts.app')
@section('body')
<article class="mb-4">
    <h2>{{ $post->title }}</h2>
    <p>By Faiz in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
</article>

<a href="/posts">Back to posts</a>
@endsection
