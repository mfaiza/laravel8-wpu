@extends('layouts.app')

@section('body')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    @if (session()->has('failed'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            {{ session('failed') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <h2 class="h2">{{ $title }}</h2>
                    <form action="/login" method="POST">
                        @csrf
                        <!-- Email input -->
                        <div class="form-floating mb-4">
                            <input type="email" id="email" name="email" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="name@example.com" autofocus required value="{{ old('email') }}"/>
                            <label class="form-label" for="email">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" id="password" name="password" class="form-control form-control-lg"
                                placeholder="password" />
                            <label class="form-label" for="password">Password</label>
                        </div>

                        <div class="d-flex justify-content-end align-items-center mb-3">
                            <!-- Checkbox -->
                            <a href="#!" class="text-decoration-none">Forgot password?</a>
                        </div>

                        <!-- Submit button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </div>

                        {{--   
            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
            </div>
  
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
              role="button">
              <i class="bi bi-facebook"></i></i>Continue with Facebook
            </a>
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
              role="button">
              <i class="bi bi-twitter"></i></i>Continue with Twitter</a> --}}

                    </form>
                    <small>Don't Have an Account? <a href="/register" class="text-decoration-none">Register</a></small>
                </div>
            </div>
        </div>
    </section>
@endsection
