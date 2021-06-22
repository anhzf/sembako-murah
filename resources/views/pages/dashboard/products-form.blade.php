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

  $photos = collect($model->photos)->zip($model->getPhotosUrl());
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
            @foreach ($photos as [$photo, $photoUrl])
              <div class="col-md-4 mb-3">
                <div class="gallery-container position-relative">
                  <img src="{{ $photoUrl }}" alt="{{ $photoUrl }}" class="w-100" />
                  <div class="position-absolute delete-gallery">
                    <button type="submit" class="text-danger" form="product__photoDeleteForm" name="photo"
                      value="{{ $photo }}">
                      <svg xmlns="http://www.w3.org/2000/svg" width="1.5rem" height="1.5rem" fill="currentColor"
                        class="bi bi-x-circle-fill" viewBox="0 0 16 16">
                        <path
                          d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                      </svg>
                    </button>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="row">
            <div class="col-12">
              <button id="product__photoUploadBtn" class="btn btn-secondary w-100" onclick="selectFile">
                Add Photo
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if ($model->exists)
    <form id="product__photoDeleteForm" method="post"
      action="{{ route('dashboard.products.delete-photo', ['model' => $model]) }}" class="d-none">
      @method('DELETE')
      @csrf
    </form>

    <form id="product__photoUploadForm" method="POST"
      action="{{ route('dashboard.products.store-photos', ['model' => $model]) }}" enctype="multipart/form-data"
      class="d-none">
      @method('PUT')
      @csrf

      <input type="file" name="photos" id="product__photoSelector" multiple accept="image/*">
    </form>
  @endif
@endsection

@push('add-script')
  <!-- CKEditor 4 -->
  <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const photoSelector = document.getElementById('product__photoSelector');
      const photoUploadBtn = document.getElementById('product__photoUploadBtn');
      const photoUploadForm = document.getElementById('product__photoUploadForm');

      CKEDITOR.replace('product__description');

      photoSelector
        .addEventListener('change', () => photoUploadForm.submit());

      photoUploadBtn
        .addEventListener('click', () => photoSelector.click());
    });
  </script>
@endpush
