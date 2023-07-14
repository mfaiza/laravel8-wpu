@extends('layouts.app')
@section('body')

<h1>{{ $title }} : {{ $name }}</h1>

@foreach ($posts as $post)
<article class="mb-2">
    <h2><a href="/posts/{{ $post->slug }}" class="text-decoration-none">{{ $post->title }}</a></h2>
    {{ $post->excerpt }}
    <p><a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a></p>
</article>
@endforeach

@endsection


