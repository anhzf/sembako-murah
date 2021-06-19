@extends('layouts.dashboard')

@section('title')
  Dashboard
@endsection

@section('content')
  <!-- Section Content -->
  <div class="section-content section-dashboard-home" data-aos="fade-up">
    <div class="container-fluid">
      <div class="dashboard-heading">
        <h2 class="dashboard-title">Create New Product</h2>
        <p class="dashboard-subtitle">Create your own product</p>
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
                        <label for="">Product Name</label>
                        <input type="text" name="" class="form-control" placeholder="Kurma Arab" />
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="">Price</label>
                        <input type="number" name="" class="form-control" placeholder="Rp 150.000" />
                      </div>
                    </div>
                    <div class="col-md-12 mt-1">
                      <div class="form-group">
                        <label for="">Kategori</label>
                        <select name="category" id="" class="form-control form-select">
                          <option value="" disabled>
                            Select Category
                          </option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-12 mt-2">
                      <div class="form-group">
                        <label for="">Description</label>
                        <textarea name="editor" id=""></textarea>
                      </div>
                    </div>
                    <div class="col-md-6 mt-2">
                      <div class="form-group">
                        <label for="">Thumbnails</label>
                        <input type="file" class="form-control" />
                        <p class="text-muted">
                          Kamu dapat memilih lebih dari satu file
                        </p>
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
