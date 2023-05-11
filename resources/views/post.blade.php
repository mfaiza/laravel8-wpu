@extends('layouts.app')
@section('body')
<article class="mb-4">
    <h2>{{ $post["title"] }}</h2>
    <h5>{{ $post["author"] }}</h5>
    <p>{{ $post["body"] }}</p>
</article>

<a href="/posts">Back to posts</a>
@endsection
