@extends('layouts.main')

@section('container')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="{{ asset('assets/img/login.png') }}"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 mb-5">
        <form>
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example13">Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
              <label class="form-check-label" for="form1Example3"> Remember me </label>
            </div>
            <a href="#!">Forgot password?</a>
          </div>

          <!-- Submit button -->
          <div class="text-center"> <!-- Tambahkan kelas "text-center" -->
            <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
          </div>

          <div class="text-center mt-3 mb-3">
            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
          </div>

          <div class="text-center"> <!-- Tambahkan kelas "text-center" -->
            <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="{{ route('google-login') }}"
              role="button">
              <i class="bi bi-google" style="color: #ffffff;"></i> Continue with Google
            </a>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
@endsection
