@extends('layouts.app')
@section('body')

<h1>{{ $title }}</h1>

@foreach ($category as $c)
<ul>
    <li><h2><a style="text-decoration: none;" href="/categories/{{ $c->slug }}">{{ $c->name }}</a></h2></li>
</ul>
@endforeach

@endsection

