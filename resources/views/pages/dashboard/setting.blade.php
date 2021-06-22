@inject('store', '\App\Models\Store')

@extends('layouts.dashboard')

@section('title', 'Setting Toko')

@section('dashboard-title', 'Store settings')

@section('dashboard-subtitle', 'Make Store that profitable')

@section('content')
  <!-- Section Content -->
  <div class="row">
    <div class="col"></div>

    <div class="col-6">
      <form method="POST" action="{{ route('dashboard.setting-toko') }}" enctype="multipart/form-data" class="card">
        @csrf

        <div class="card-body">
          <div class="row">
            <div class="col-12">
              <x-input label="Nama Toko" type="text" name="name" :value="$store::getName()" required />
            </div>
          </div>

          <div class="row mt-2">
            <div class="col-12">
              <x-input label="Deskripsi Toko" type="text" name="description" :value="$store::getDescription()" />
            </div>
          </div>

          {{-- <div class="row mt-2"><span class="col-12">Logo Toko</span></div>

          <div class="row mt-2">
            <div class="col-12">
              <img src="{{ $store->getPhotoUrl() }}" class="img-fluid d-block mx-auto"></img>
            </div>
          </div>

          <div class="row">
            <div class="col-12">
              <x-input type="file" name="photo" accept="image/*" />
            </div>
          </div> --}}

          <div class="row mt-4">
            <div class="col text-end">
              <button type="submit" class="btn btn-success px-5">
                Save Now
              </button>
            </div>
          </div>
        </div>
      </form>
    </div>

    <div class="col"></div>
  </div>
  </div>
@endsection

@push('add-script')

@endpush
