@extends('layouts.app')
@section('body')

<h1>Ini Halaman Post</h1>

@foreach ($posts as $post)
<article class="mb-2">
    <h2><a href="/posts/{{ $post->slug }}">{{ $post->title }}</a></h2>
    {{ $post->excerpt }}
</article>
@endforeach

@endsection


