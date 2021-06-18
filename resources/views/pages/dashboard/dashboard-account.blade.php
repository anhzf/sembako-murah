@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Account Setting</h2>
      <p class="dashboard-subtitle">Update your current profile</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <!-- Isi -->
                <div class="row mb-3">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="name"> Your Name</label>
                      <input type="text" class="form-control" id="name" name="name"
                        placeholder="Masukkan Nama lengkap Anda" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="email"> Your Email</label>
                      <input type="email" class="form-control" id="email" name="email"
                        placeholder="Masukkan Email Anda" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressOne"> Address 1</label>
                      <input type="text" class="form-control" id="addressOne" name="addressOne"
                        placeholder="Masukkan alamat utama anda" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="addressTwo"> Address 2</label>
                      <input type="text" class="form-control" id="addressTwo" name="addressTwo"
                        placeholder="Masukkan Alamat anda" />
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="province">Province</label>
                      <select name="province" id="province" class="form-control">
                        <option value="West Java">Jawa Barat</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="city">City</label>
                      <select name="city" id="city" class="form-control">
                        <option value="Bandung">Bandung</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label for="postalCode">
                        Post <code></code></label>
                      <input type="text" class="form-control" id="postalCode" name="postelCode" placeholder="57773" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="country">Country</label>
                      <input type="text" class="form-control" id="country" name="country" placeholder="Indonesia" />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="mobile">Mobile</label>
                      <input type="text" class="form-control" id="mobile" name="mobile" placeholder="+6289699077651" />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col text-end">
                    <button type="submit" class="btn btn-success px-5">
                      Save Now
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('add-script')

@endpush
