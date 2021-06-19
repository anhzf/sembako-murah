@extends('layouts.dashboard')

@section('title')
Setting Toko
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Store Setting</h2>
      <p class="dashboard-subtitle">Make Store that profitable</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <form action="">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Full Name</label>
                      <input type="text" name="" class="form-control" />
                    </div>
                  </div>
                  <div class="col-md-6 mt-1">
                    <div class="form-group">
                      <label for="">Kategori</label>
                      <select name="category" id="" class="form-control form-select">
                        <option value="" disabled>
                          Select Category
                        </option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 mt-2">
                    <div class="form-group">
                      <label for="">Store</label>
                      <p class="text-muted">
                        Apakah anda ingin membuat toko?
                      </p>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="is_store_open" id="openStoreTrue"
                          value="true" />
                        <label for="openStoreTrue" class="form-check-label">Buka</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="is_store_open" id="openStoreFalse"
                          value="false" />
                        <label for="openStoreFalse" class="form-check-label">Tutup</label>
                      </div>
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
