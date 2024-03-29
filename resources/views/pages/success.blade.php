@extends('layouts.success')

@section('title')
Success Page
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-success">
  <!-- Success Section -->
  <section class="section-success" data-aos="zoom-in">
    <div class="container">
      <div class="row align-items-center row-login justify-content-center">
        <div class="col-lg-6 text-center">
          <img src="{{ url('/images/success.svg') }}" alt="" class="mb-4" />
          <h2>Transaction Prosessed</h2>
          <p>Silahkan menunggu konfirmasi email dari kami</p>
          <div>
            <a href="{{ url('/dashboard') }}" class="btn btn-success w-50 mt-4">
              My Dashboard
            </a>
            <a href="{{ url('/') }}" class="btn btn-signup w-50 mt-2">
              Back to Homepage
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
