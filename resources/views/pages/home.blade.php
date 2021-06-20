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
          <h5>Trend Categories</h5>
        </div>
      </div>
      <div class="row">
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="700">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="800">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="900">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
        <!-- Component Categories -->
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="1000">
          <a href="" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-herbal.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Herbal</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- New Product -->
  <section class="store-new-product">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>New Products</h5>
        </div>
      </div>
      <div class="row">
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="100">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url()"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="200">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="300">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="400">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="500">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="600">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="700">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
        <!-- Component New Product -->
        <div class="col-6 col-md-4 col-lg-3" data-aos="fade-up" data-aos-delay="800">
          <a href="{{ route('detail',1) }}" class="component-products d-block">
            <div class="products-thumbnail">
              <div class="products-image" style="background-image: url('/images/product-zuriat.jpg')"></div>
            </div>
            <div class="products-text">Buah Zuriat</div>
            <div class="products-price">Rp. 12.000,00/kg</div>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
