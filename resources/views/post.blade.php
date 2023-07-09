@extends('layouts.app')
@section('body')
<article class="mb-4">
    <h2>{{ $post->title }}</h2>
    {!! $post->body !!}
</article>

<a href="/posts">Back to posts</a>
@endsection
