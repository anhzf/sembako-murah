@extends('layouts.dashboard')

@section('title')
  Dashboard
@endsection

@section('dashboard-title')
  Account Setting
@endsection

@section('dashboard-subtitle')
  Update your current profiles
@endsection

@php
$mapToOptions = function (array $data) {
    array_walk($data, function (&$item) {
        $item = [
            'label' => $item['nama'],
            'value' => $item['id'],
        ];
    });

    return $data;
};
@endphp

@section('content')
  <div class="row">
    <div class="col-12">
      <form method="POST" action="{{ route('dashboard.setting-account') }}">
        @csrf

        <div class="card">
          <div class="card-body">
            <!-- Isi -->
            <div class="row mb-3">
              <div class="col-md-6">
                <x-input label="Your Name" type="text" name="name" placeholder="Masukkan Nama Lengkap Anda"
                  value="{{ Auth::user()->name }}" disabled />
              </div>

              <div class="col-md-6">
                <x-input label="Your Email" type="email" name="email" placeholder="Masukkan Email Anda"
                  value="{{ Auth::user()->email }}" disabled />
              </div>

              <div class="col-md-6">
                <x-input label="Address 1" type="text" name="address_one" placeholder="Masukkan Alamat Utama Anda"
                  value="{{ Auth::user()->address_one }}" />
              </div>

              <div class="col-md-6">
                <x-input label="Address 2" type="text" name="address_two" placeholder="Masukkan Alamat Anda"
                  value="{{ Auth::user()->address_two }}" />
              </div>

              <div class="col-md-4">
                <x-select label="Province" name="province_id" :options="$mapToOptions($provinceList)"
                  value="{{ Auth::user()->province_id }}" />
              </div>

              <div class="col-md-4">
                <x-select label="City" name="regency_id" :options="$mapToOptions($cityList)"
                  value="{{ Auth::user()->regency_id }}" />
              </div>

              <div class="col-md-4">
                <x-input label="Zip Code" type="text" name="zip_code" placeholder="57773"
                  value="{{ Auth::user()->zip_code }}" />
              </div>

              <div class="col-md-6">
                <x-input label="Country" type="text" name="country" placeholder="Indonesia"
                  value="{{ Auth::user()->country }}" />
              </div>

              <div class="col-md-6">
                <x-input label="Phone Number" type="tel" name="phone_number" placeholder="+6289699077651"
                  value="{{ Auth::user()->phone_number }}" />
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
@endsection

@push('add-script')

@endpush
