@extends('layouts.dashboard')

@section('dashboard-title', $model->getFullname() ?? 'Add Product')

@section('dashboard-subtitle', 'Product Details')

  @php
  $categories = $categoryList
      ->map(
          fn($item) => [
              'value' => $item->getKey(),
              'label' => $item->name,
          ],
      )
      ->all();
  @endphp

@section('content')
  @if ($model->exists)
    <form method="POST" id="product__delete"
      action="{{ route('dashboard.products.destroy', ['model' => $model->getKey()]) }}" class="d-none">
      @method('DELETE')
      @csrf
    </form>
  @endif

  <div class="row">
    <div class="col-12">
      <form method="POST" action="{{ $action }}">
        @csrf

        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <x-input label="Product Name" type="text" name="name" placeholder="Kurma Arab"
                  :value="$model->name ?? old('name')" />
              </div>

              <div class="col-md-6">
                <x-input label="Price" type="number" name="price" placeholder="Rp 150.000"
                  :value="$model->price ?? old('price')" />
              </div>

              <div class="col-md-12 mt-1">
                <x-select label="Kategori" name="category_id" :options="$categories"
                  :value="$model->category_id ?? old('category_id')" />
              </div>

              <div class="col-md-12 mt-2">
                <x-input label="Description" type="textarea" name="description" id="product__description"
                  :value="$model->description ?? old('description')" html />
              </div>
            </div>

            <div class="row mt-2">
              <div class="col-12">
                <button type="submit" class="btn btn-success px-5 w-100">
                  Save Product
                </button>
              </div>
            </div>

            @if ($model->exists)
              <div class="row mt-2">
                <div class="col-12">
                  <button type="submit" form="product__delete"
                    onclick="return confirm('Are you sure you want to delete this product?')"
                    class="btn btn-outline-danger px-5 w-100">
                    Delete Product
                  </button>
                </div>
              </div>
            @endif
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
@endsection

@push('add-script')
  <!-- CKEditor 4 -->
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    function thisFileUpload() {
      document.getElementById('file').click();
    }

    document.addEventListener('DOMContentLoaded', function() {
      CKEDITOR.replace('product__description');
    });
  </script>
@endpush
