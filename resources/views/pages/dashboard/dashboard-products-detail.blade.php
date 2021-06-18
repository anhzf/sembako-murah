@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Kurma Arab</h2>
      <p class="dashboard-subtitle">Product Details</p>
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
                </div>
                <div class="row mt-2">
                  <div class="col-12">
                    <button type="submit" class="btn btn-success px-5 w-100">
                      Update Product
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-4 mb-3">
                  <div class="gallery-container position-relative">
                    <img src="/images/product-details-1.jpg" alt="" class="w-100" />
                    <div class="position-absolute delete-gallery">
                      <a href="#">
                        <img src="/images/icon-delete.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="gallery-container position-relative">
                    <img src="/images/product-details-4.jpg" alt="" class="w-100" />
                    <div class="position-absolute delete-gallery">
                      <a href="#">
                        <img src="/images/icon-delete.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="gallery-container position-relative">
                    <img src="/images/product-maduarab.jpg" alt="" class="w-100" />
                    <div class="position-absolute delete-gallery">
                      <a href="#">
                        <img src="/images/icon-delete.svg" />
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <div class="gallery-container position-relative">
                    <img src="/images/product-details-1.jpg" alt="" class="w-100" />
                    <div class="position-absolute delete-gallery">
                      <a href="#">
                        <img src="/images/icon-delete.svg" />
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <input type="file" id="file" style="display: none" multiple />
                  <button class="btn btn-secondary w-100" onclick="thisFileUpload()">
                    Add Photo
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('add-script')
<!-- CKEditor 4 -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<script>
  function thisFileUpload() {
        document.getElementById("file").click();
      }
</script>
<script>
  CKEDITOR.replace("editor");
</script>
@endpush
