@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">Dashboard</h2>
      <p class="dashboard-subtitle">Look what you have made today!</p>
    </div>
    <div class="dashboard-content">
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
      <div class="row mt-3">
        <div class="col-12 mt-2">
          <h5 class="mb-3">Recent Transactions</h5>
          <a href="/dashboard-transactions-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img src="/images/product-details-1.jpg" class="img-thumbnail" alt="" />
                </div>
                <div class="col-md-4">Kurma</div>
                <div class="col-md-3">Fahmi Habibi</div>
                <div class="col-md-3">January 12, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/expand_more_24px.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
          <a href="/dashboard-transactions-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img src="/images/product-details-1.jpg" class="img-thumbnail" alt="" />
                </div>
                <div class="col-md-4">Kurma</div>
                <div class="col-md-3">Fahmi Habibi</div>
                <div class="col-md-3">January 12, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/expand_more_24px.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
          <a href="/dashboard-transactions-details.html" class="card card-list d-block">
            <div class="card-body">
              <div class="row">
                <div class="col-md-1">
                  <img src="/images/product-details-1.jpg" class="img-thumbnail" alt="" />
                </div>
                <div class="col-md-4">Kurma</div>
                <div class="col-md-3">Fahmi Habibi</div>
                <div class="col-md-3">January 12, 2021</div>
                <div class="col-md-1 d-none d-md-block">
                  <img src="/images/expand_more_24px.svg" alt="" />
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push('add-script')
<script>
  $("#menu-toggle").click(function (e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
      });
</script>
@endpush
