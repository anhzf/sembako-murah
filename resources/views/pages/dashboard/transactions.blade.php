@extends('layouts.dashboard')

@section('title', 'Transaksi')

@section('dashboard-title', 'Transaksi')

@section('dashboard-subtitle', 'Big result start from the small one')

@section('content')
  <!-- Transaction Content -->
  <div class="row">
    <div class="col-12 mt-2">
      <!-- Pills -->
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        <li class="nav-item" role="presentation">
          <a class="nav-link active" id="pills-sell-tab" data-bs-toggle="pill" href="#pills-sell" role="tab"
            aria-controls="pills-sell" aria-selected="true">Sell Product</a>
        </li>
        <li class="nav-item" role="presentation">
          <a class="nav-link" id="pills-buy-tab" data-bs-toggle="pill" href="#pills-buy" role="tab"
            aria-controls="pills-buy" aria-selected="false">Buy Product</a>
        </li>
      </ul>
      <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
          @foreach (array_fill(0, env('APP_ENV') !== 'production' ? 5 : 0, null) as $item)
            <a href="{{ url('dashboard/transactions/1') }}" class="card card-list d-block">
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
          @endforeach
        </div>

        <div class="tab-pane fade" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
          @foreach (array_fill(0, env('APP_ENV') !== 'production' ? 5 : 0, null) as $item)
            <a href="{{ url('dashboard/transactions/myorder/1') }}" class="card card-list d-block">
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
          @endforeach
        </div>
      </div>
    </div>
  </div>
@endsection

@push('add-script')

@endpush
