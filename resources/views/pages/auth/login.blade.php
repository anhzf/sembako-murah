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
          <form class="mt-3">
            <div class="mb-3">
              <label for="email" class="form-label mb-1">Email address</label>
              <input type="email" class="form-control w-75" id="email" aria-describedby="emailHelp" />
            </div>
            <div class="mb-3">
              <label for="password" class="form-label mb-1">Password</label>
              <input type="password" class="form-control w-75" id="password" />
            </div>
            <a href="/dashboard.html" class="btn btn-success d-grid gap-2 w-75 mt-4">
              Sign In to My Account
            </a>
            <a href="/register.html" class="btn btn-signup d-grid w-75 mt-2">
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
