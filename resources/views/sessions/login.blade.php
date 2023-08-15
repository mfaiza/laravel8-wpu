@extends('layouts.app')

@section('body')
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/login.svg" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                    <h2 class="h2">{{ $title }}</h2>
                    <form>
                        <!-- Email input -->
                        <div class="form-floating mb-4">
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

                        <div class="d-flex justify-content-end align-items-center mb-3">
                            <!-- Checkbox -->
                            <a href="#!">Forgot password?</a>
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
                    <small>Don't Have an Account? <a href="/register">Register</a></small>
                </div>
            </div>
        </div>
    </section>
    
@endsection
