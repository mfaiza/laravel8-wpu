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
                    <form>
                        <!-- Name input -->
                        <div class="form-floating mb-3">
                            <input type="text" id="floatingInput" class="form-control form-control-lg"
                                placeholder="Name" />
                            <label class="form-label" for="floatingInput">Name</label>
                        </div>
                        <!-- Username input -->
                        <div class="form-floating mb-3">
                            <input type="text" id="floatingInput" class="form-control form-control-lg"
                                placeholder="Username" />
                            <label class="form-label" for="floatingInput">Username</label>
                        </div>
                        <!-- Email input -->
                        <div class="form-floating mb-3">
                            <input type="email" id="floatingInput" class="form-control form-control-lg"
                                placeholder="name@example.com" />
                            <label class="form-label" for="floatingInput">Email address</label>
                        </div>
                        <!-- Password input -->
                        <div class="form-floating mb-3">
                            <input type="password" id="floatingPassword" class="form-control form-control-lg"
                                placeholder="password" />
                            <label class="form-label" for="floatingPassword">Password</label>
                        </div>
                        <!-- Submit button -->
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                    </form>
                    <small>Already Have an Account? <a href="/login">Sign In</a></small>
                </div>
            </div>
        </div>
    </section>
@endsection
