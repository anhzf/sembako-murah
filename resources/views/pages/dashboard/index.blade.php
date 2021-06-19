@extends('layouts.dashboard')

@section('dashboard-title')
  Dashboard
@endsection

@section('dashboard-subtitle')
  Look what you have made today!
@endsection

@section('content')
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-2">
        <div class="card-body">
          <div class="dashboard-card-title">Customer</div>
          <div class="dashboard-card-subtitle">12050</div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-2">
        <div class="card-body">
          <div class="dashboard-card-title">Revenue</div>
          <div class="dashboard-card-subtitle">Rp 850.200</div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-2">
        <div class="card-body">
          <div class="dashboard-card-title">Transaction</div>
          <div class="dashboard-card-subtitle">Rp 1.205.000</div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('add-script')

@endpush
