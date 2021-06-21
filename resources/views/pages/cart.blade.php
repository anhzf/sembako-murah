@inject('store', '\App\Models\Store')

@extends('layouts.front')

@section('title', "Cart - {$store->getName()}")

@section('content')
  {{-- Page Content --}}
  <div class="page-content page-cart">
    <!-- Breadcrumbs -->
    <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="/index.html">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Cart
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section>

    <!-- Cart -->
    <section class="store-cart">
      <div class="container">
        <!-- Table Cart -->
        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-12 table-responsive">
            <table class="table table-borderless table-cart">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Name &amp; Seller</th>
                  <th scope="col">Price</th>
                  <th scope="col">Menu</th>
                </tr>
              </thead>
              <tbody>
                <!-- Cart 1 -->
                <tr>
                  <td style="width: 20%">
                    <img src="/images/product-details-1.jpg" alt="" class="cart-image" />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Sembako Murah</div>
                    <div class="product-subtitle">By Fahmi Habibi</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Rp. 30,000.00</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn mt-3 btn-danger"> Remove </a>
                  </td>
                </tr>
                <!-- Cart 2 -->
                <tr>
                  <td style="width: 20%">
                    <img src="/images/product-details-1.jpg" alt="" class="cart-image" />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Sembako Murah</div>
                    <div class="product-subtitle">By Fahmi Habibi</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Rp. 30,000.00</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn mt-3 btn-danger"> Remove </a>
                  </td>
                </tr>
                <!-- Cart 3 -->
                <tr>
                  <td style="width: 20%">
                    <img src="/images/product-details-1.jpg" alt="" class="cart-image" />
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Sembako Murah</div>
                    <div class="product-subtitle">By Fahmi Habibi</div>
                  </td>
                  <td style="width: 35%">
                    <div class="product-title">Rp. 30,000.00</div>
                    <div class="product-subtitle">IDR</div>
                  </td>
                  <td style="width: 20%">
                    <a href="#" class="btn mt-3 btn-danger"> Remove </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Line and Shipping Details -->
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-2">Shipping Details</h2>
          </div>
        </div>

        <!-- Details -->
        <div class="row mb-2" data-aos="fade-up" data-aos-delay="200">
          <form action="" class="row g-3">
            <div class="col-lg-6">
              <label for="address1" class="form-label">Address 1</label>
              <input type="text" class="form-control" id="address1" placeholder="Jl Solo-Purwodadi KM 12" />
            </div>
            <div class="col-lg-6">
              <label for="address2" class="form-label">Address 2</label>
              <input type="text" class="form-control" id="address2" placeholder="Jl Solo-Purwodadi KM 12" />
            </div>
            <div class="col-lg-5">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-lg-5">
              <label for="inputState" class="form-label">State</label>
              <select id="inputState" class="form-select">
                <option selected>Choose...</option>
                <option>...</option>
              </select>
            </div>
            <div class="col-lg-2">
              <label for="postCode" class="form-label">Post</label>
              <input type="text" class="form-control" id="postCode" placeholder="57773" />
            </div>
            <div class="col-lg-6">
              <label for="mobile" class="form-label">Mobile</label>
              <input type="text" class="form-control" id="mobile" placeholder="089699077651" />
            </div>
          </form>
        </div>

        <!-- Line and Payment Informations -->
        <div class="row" data-aos="fade-up" data-aos-delay="150">
          <div class="col-12">
            <hr />
          </div>
          <div class="col-12">
            <h2 class="mb-2">Payment Informations</h2>
          </div>
        </div>

        <!-- Payment Informations -->
        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-4 col-md-2">
            <div class="product-title">Rp 10.000</div>
            <div class="product-subtitle">Country tax</div>
          </div>
          <div class="col-4 col-md-3">
            <div class="product-title">Rp 10.000</div>
            <div class="product-subtitle">Product Insurance</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title">Rp 20.000</div>
            <div class="product-subtitle">Ship to Jakarta</div>
          </div>
          <div class="col-4 col-md-2">
            <div class="product-title text-success">Rp 30.000</div>
            <div class="product-subtitle">Total</div>
          </div>
          <div class="col-8 col-md-3">
            <a href="/success.html" class="btn btn-success mt-4 px-4 d-grid gd-lg-flex">Checkout Now
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
@endsection

@push('add-script')
  {{-- Vue JS --}}
@endpush
