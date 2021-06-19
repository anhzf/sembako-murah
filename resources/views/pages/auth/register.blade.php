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
            <div class="form-group">
              <label for="register__name">Full Name</label>
              <input type="text" name="name" id="register__name" value="{{ old('name') }}" class="form-control" required
                autofocus />
            </div>

            <div class="form-group">
              <label for="register__email">Email Address</label>
              <input type="text" name="email" id="register__email" value="{{ old('email') }}" class="form-control"
                required />
            </div>

            <div class="form-group">
              <label for="register__password">Password</label>
              <input type="password" name="password" id="register__password" value="{{ old('password') }}"
                class="form-control" required />
            </div>

            <div class="form-group">
              <label for="register__passwordConfirm">Ulangi Password</label>
              <input type="password" name="password_confirmation" id="register__passwordConfirm"
                value="{{ old('password_confirmation') }}" class="form-control" required />
            </div>

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
{{-- Vue JS --}}
@endpush
