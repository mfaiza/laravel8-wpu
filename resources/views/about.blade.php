@extends('layouts.app')
@section('body')
    <div class="row flex-lg-row-reverse align-items-center ">
        <div class="col-10 col-sm-8 col-lg-6 mt-4 ">
            <img src="{https://cdn3d.iconscout.com/3d/premium/thumb/food-and-drink-5727926-4800418.png}"
                alt="Bootstrap Themes" class="img-fluid" height="300" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold lh-1 mb-3">FastFeast</h1>
            <p class="lead">Nikmati makan cepat dengan rasa yang tidak terlupakan.</p>
            <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                <button type="button" class="btn btn-warning btn-lg px-4 me-md-2">Primary</button>
                <button type="button" class="btn btn-danger btn-lg px-4">Default</button>
            </div>
        </div>
    </div>
@endsection
