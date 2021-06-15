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
          <form action="" class="d-grid gap-0.5 mt-3">
            <div class="form-group">
              <label for="">Full Name</label>
              <input type="text" name="" class="form-control is-valid" v-model="name" autofocus />
            </div>
            <div class="form-group">
              <label for="">Email Address</label>
              <input type="text" name="" class="form-control is-invalid" v-model="email" />
            </div>
            <div class="form-group">
              <label for="">Password</label>
              <input type=password" name="" class="form-control w-75" />
            </div>
            <div class="form-group">
              <label for="">Store</label>
              <p class="text-muted">Apakah anda ingin membuat toko?</p>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="is_store_open" id="openStoreTrue"
                  v-model="is_store_open" :value="true" />
                <label for="openStoreTrue" class="form-check-label">Iya, boleh</label>
              </div>
              <div class="form-check form-check-inline">
                <input type="radio" class="form-check-input" name="is_store_open" id="openStoreFalse"
                  v-model="is_store_open" :value="false" />
                <label for="openStoreFalse" class="form-check-label">Engga, makasih</label>
              </div>
            </div>
            <div class="" v-if="is_store_open">
              <label for="">Nama Toko</label>
              <input type="text" name="" class="form-control" />
            </div>
            <div class="form-group" v-if="is_store_open">
              <label for="">Kategori</label>
              <select name="category" id="" class="form-control form-select">
                <option value="" disabled>Select Category</option>
              </select>
            </div>
            <a href="/dashboard.html" class="btn btn-success mt-4">
              Sign Up Now
            </a>
            <a href="/login.html" class="btn btn-signup mt-2">
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
