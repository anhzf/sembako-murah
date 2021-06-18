@extends('layouts.dashboard')

@section('title')
Dashboard
@endsection

@section('content')
<!-- Section Content -->
<div class="section-content section-dashboard-home" data-aos="fade-up">
  <div class="container-fluid">
    <div class="dashboard-heading">
      <h2 class="dashboard-title">My Products</h2>
      <p class="dashboard-subtitle">Manage it well and get money</p>
    </div>
    <div class="dashboard-content">
      <div class="row">
        <div class="col-12">
          <a href="/dashboard-product-create.html" class="btn btn-success">Add New Product</a>
        </div>
      </div>
      <div class="row mt-4">
        <div class="col-12">
          <!-- Pills -->
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <a class="nav-link active" id="pills-sell-tab" data-bs-toggle="pill" href="#pills-sell" role="tab"
                aria-controls="pills-sell" aria-selected="true">Box</a>
            </li>
            <li class="nav-item" role="presentation">
              <a class="nav-link" id="pills-buy-tab" data-bs-toggle="pill" href="#pills-buy" role="tab"
                aria-controls="pills-buy" aria-selected="false">List</a>
            </li>
          </ul>
          <!-- Pills Content -->
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-sell" role="tabpanel" aria-labelledby="pills-sell-tab">
              <!-- content -->
              <div class="row">
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="
                            /dashboard-products-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                      <img src="/images/product-zuriat.jpg" alt="" class="w-100 mb-2" />
                      <div class="product-title">Buah Zuriat</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="
                            /dashboard-products-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                      <img src="/images/product-zuriat.jpg" alt="" class="w-100 mb-2" />
                      <div class="product-title">Buah Zuriat</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="
                            /dashboard-products-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                      <img src="/images/product-zuriat.jpg" alt="" class="w-100 mb-2" />
                      <div class="product-title">Buah Zuriat</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                  <a href="
                            /dashboard-products-details.html" class="card card-dashboard-product d-block">
                    <div class="card-body">
                      <img src="/images/product-zuriat.jpg" alt="" class="w-100 mb-2" />
                      <div class="product-title">Buah Zuriat</div>
                      <div class="product-category">Foods</div>
                    </div>
                  </a>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="pills-buy" role="tabpanel" aria-labelledby="pills-buy-tab">
              <!-- Content -->
              <a href="/dashboard-products-details.html" class="card card-list d-block">
                <div class="card-body">
                  <div class="row">
                    <div class="col-md-1">
                      <img src="/images/product-details-1.jpg" class="img-thumbnail" alt="" />
                    </div>
                    <div class="col-md-3">Kurma</div>
                    <div class="col-md-3">Foods</div>
                    <div class="col-md-3">100</div>
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
  </div>
</div>
@endsection
