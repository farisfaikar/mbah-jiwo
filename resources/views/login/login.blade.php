@extends('layouts.main')

@section('container')
    <section class="vh-50">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="{{ asset('assets/img/login.png') }}" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mb-5">
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    @if(session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="text-center mb-3">
                            <h1>Login</h1>
                        </div>
                        
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="email">Email address</label>
                            <input type="email" name="email" id="email" class="form-control form-control-lg" value="{{ old('email') }}" @error('email') is-invalid @enderror autofocus required/>
                            @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control form-control-lg" />
                        </div>

                        <!-- Submit button -->
                        <div class="text-center">
                            <!-- Tambahkan kelas "text-center" -->
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                        </div>

                        <div class="text-center mt-3 mb-3">
                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                        </div>

                        <div class="text-center mb-5">
                            <!-- Tambahkan kelas "text-center" -->
                            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998"
                                href="{{ route('google-login') }}" role="button">
                                <i class="bi bi-google" style="color: #ffffff;"></i> Continue with Google
                            </a>
                        </div>

                        <div class="text-center">
                            <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
