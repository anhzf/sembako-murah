@extends('layouts.front')

@section('title')
  Categories
@endsection

@section('content')
  {{-- Page Content --}}
  <div class="page-content page-home">
    <!-- All Categories -->
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>All Categories</h5>
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
  </div>
@endsection
