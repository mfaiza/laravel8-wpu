@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome Back, {{ auth()->user()->name }}</h1>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Total Posts
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $posts->count() }} Posts</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            My Posts
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ auth()->user()->posts->count() }} Posts</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Categories
                        </div>
                        <div class="card-body">
                            <p class="card-text">{{ $categories->count() }} Category</p>
                            <a href="#" class="btn btn-primary d-flex">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">

            </div>
        </div>
    @endsection
