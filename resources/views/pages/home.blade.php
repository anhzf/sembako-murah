@inject('formatter', '\App\Helpers\Formatter');

@extends('layouts.front')

@section('title')
  Sembako Murah
@endsection

@section('content')
  {{-- Page Content --}}
  <div class="page-content page-home">
    <!-- Home Carousel -->
    <section class="store-carousel">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" data-aos="zoom-in">
            <div id="homeCarousel" class="carousel slide carousel-dark" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="0" class="active"
                  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#homeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="Carousel Image 1" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>
                      Some representative placeholder content for the first
                      slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="Carousel Image 2" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>
                      Some representative placeholder content for the second
                      slide.
                    </p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="/images/banner.jpg" class="d-block w-100" alt="Carousel Image 3" />
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>
                      Some representative placeholder content for the third
                      slide.
                    </p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#homeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#homeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel -->
    </section>

    <!-- Categories -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Featured Categories</h5>
          </div>
        </div>
        <div class="row">
          <!-- Component Categories -->
          @foreach ($categoryList as $category)
            <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('home', ['category' => $category->slug]) }}" class="component-categories d-block">
                <div class="categories-image">
                  <img src="/images/categories-herbal.svg" alt="" class="w-100" />
                </div>
                <p class="categories-text">{{ $category->name }}</p>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </section>

    <!-- New Product -->
    <section class="store-new-product">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Featured Products</h5>
          </div>
        </div>
        <div class="row">
          <!-- Component New Product -->
          @foreach ($productList as $product)
            <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
              <a href="{{ route('detail', $product->getKey()) }}" class="component-products d-block">
                <div class="products-thumbnail">
                  @if (isset($product->photos[0]))
                    <img src="{{ $product->photos[0] }}" alt="" class="products-image">
                  @else
                    <img src="https://via.placeholder.com/200?{{ Arr::query(['text' => 'No image']) }}" alt=""
                      class="products-image">
                  @endif
                </div>
                <div class="products-text">{{ $product->name }}</div>
                <div class="products-price">{{ $formatter::intToIdr($product->price) }}</div>
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </section>
  </div>
@endsection
