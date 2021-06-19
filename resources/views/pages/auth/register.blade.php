@extends('layouts.auth')

@section('title')
  Register Page
@endsection

@section('content')
  {{-- Page Content --}}
  <div class="page-content page-auth" id="register">
    <div class="section-store-auth" data-aos="fade-up">
      <div class="container">
        <div class="row align-items-center justify-content-center row-login">
          <div class="col-lg-4">
            <h2>Memulai untuk jual beli, <br />Menjadi lebih mudah</h2>
            <form method="POST" action="{{ route('register') }}" class="d-grid gap-0.5 mt-3">
              @csrf

              <x-input label="Full Name" type="text" name="name" required autofocus />

              <x-input label="Email Address" type="email" name="email" required />

              <x-input label="Password" type="password" name="password" required />

              <x-input label="Repeat Password" type="password" name="password_confirmation" required />

              <button type="submit" class="btn btn-success mt-4">
                Sign Up Now
              </button>

              <a href="{{ route('login') }}" class="btn btn-signup mt-2">
                Back to Sign In
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('add-script')
@endpush
