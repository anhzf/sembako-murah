@extends('layouts.auth')

@section('title')
  Login
@endsection

@section('content')
  <!-- Page Content -->
  <div class="page-content page-auth">
    <section class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center row-login">
          <div class="col-lg-6 text-center">
            <img src="/images/login-placeholder.png" alt="" class="w-50 mb-4 mb-lg-none" />
          </div>

          <div class="col-lg-5">
            <h2>Belanja kebutuhan utama ada, <br />Menjadi lebih mudah</h2>

            <form method="POST" action="{{ route('login') }}" class="mt-3">
              @csrf

              <x-input label="Email address" type="email" name="email" class="mb-3" input-class="w-75" required
                autofocus />

              <x-input label="Password" type="password" name="password" class="mb-3" input-class="w-75" required />

              <x-checkbox :label="__('Remember me')" name="remember" />

              <button type="submit" class="btn btn-success d-grid gap-2 w-75 mt-4">
                Sign In to My Account
              </button>

              <a href="{{ route('register') }}" class="btn btn-signup d-grid w-75 mt-2">
                Sign Up
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@push('add-script')
@endpush
