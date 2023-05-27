@extends('layouts.main')

@section('container')
    <section>
        <section id="contact" class="contact">
            <div class="container">
                <div class="section-title">
                    <h1>Login</h1>
                </div>
                <div class="row">
                    <div class="card d-flex justify-content-center">
                        <div class="card-body">
                            <form action="{{-- route('login') --}}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                </div>

                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Login</button>
                                </div>
                            </form>

                            <div class="mb-3">
                                <a href="{{ route('google-login') }}" class="btn btn-outline-primary">Login with
                                    Google</a>
                            </div>

                            <div>
                                <p>Don't have an account? <a href="{{-- route('register') --}}">Register</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection
