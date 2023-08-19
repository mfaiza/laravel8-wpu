@extends('layouts.app')

@section('body')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/register.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h2 class="h2">{{ $title }}</h2>
                    <form action="/register" method="POST">
                        @csrf
                        <!-- Name input -->
                        <div class="form-floating mb-2">
                            <input type="text" name="name" id="floatingInput" class="form-control form-control-lg @error('name') is-invalid @enderror"
                                placeholder="Name" required value="{{ old('name') }}"/>
                            <label class="form-label" for="floatingInput">Name</label>
                            @error('name')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Username input -->
                        <div class="form-floating mb-2">
                            <input type="text" name="username" id="floatingInput" class="form-control form-control-lg @error('username') is-invalid @enderror"
                                placeholder="Username" required value="{{ old('username') }}"/>
                            <label class="form-label" for="floatingInput">Username</label>
                            @error('username')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-2">
                            <input type="email" name="email" id="floatingInput" class="form-control form-control-lg @error('email') is-invalid @enderror"
                                placeholder="name@example.com" required value="{{ old('email') }}"/>
                            <label class="form-label" for="floatingInput">Email address</label>
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Password input -->
                        <div class="form-floating mb-2">
                            <input type="password" name="password" id="floatingPassword" class="form-control form-control-lg @error('password') is-invalid @enderror"
                                placeholder="password" required/>
                            <label class="form-label" for="floatingPassword">Password</label>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                    </form>
                    <small>Already Have an Account? <a href="/login" class="text-decoration-none">Sign In</a></small>
                </div>
            </div>
        </div>
    </section>
@endsection
