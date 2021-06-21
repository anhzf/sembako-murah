@inject('formatter', '\App\Helpers\Formatter');

@extends('layouts.front')

@section('title', "Search for {$qForTitle}")

@section('content')
  {{-- Page Content --}}
  <div class="page-content page-home">
    <section class="store-trend-categories">
      <div class="container">
        <div class="row">
          <div class="col-12" data-aos="fade-up">
            <h5>Search result for {{ $qForTitle }}</h5>
          </div>
        </div>

        <div class="row">
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
