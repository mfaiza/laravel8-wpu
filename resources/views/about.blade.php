@extends('layouts.app')
@section('body')
    Ini Halaman About
    <p>{{ $name }}</p>
    <p>{{ $no_telp }}</p>
    <img src="img/kafka.jpg" alt="{{ $name }}" width="200">
    <script src="js/script.js"></script>
@endsection
