@inject('formatter', '\App\Helpers\Formatter');
@inject('store', '\App\Models\Store');

@extends('layouts.front')

@section('title', "{$model->name} - {$store->getName()}")

@php
$photos = collect(collect($model->photos)->count() ? $model->photos : ['https://via.placeholder.com/200?' .
Arr::query(['text' => 'No image'])]);
@endphp

@section('content')
{{-- Page Content --}}
<div class="page-content page-details">
  <!-- Breadcrumbs -->
  <section class="store-breadcrumbs" data-aos="fade-down" data-aos-delay="100">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Products Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section class="store-gallery" id="gallery">
    <div class="container">
      <div class="row">
        <div class="col-lg-8" data-aos="zoom-in">
          <transition name="slide-fade" mode="out-in">
            <img :src="photos[activePhoto]" :key="activePhoto" class="w-100 main-image" alt="" />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, i) in photos" :key="i" data-aos="zoom-in"
              data-aos-delay="100">
              <a href="#" @click="changeActive(i)">
                <img :src="photo" alt="" class="w-100 thumbnail-image" :class="{active: i == activePhoto}" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Details -->
  <div class="store-details-container" data-aos="fade-up">
    <!-- Heading -->
    <section class="store-heading pt-4">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>{{ $model->name }}</h1>
            {{-- <div class="owner">By Fahmi Habibi</div> --}}
            <div class="price">
              {{ $formatter::intToIdr($model->price) }}
            </div>
          </div>
          <div class="col-lg-2 d-grid gap-2 d-lg-block" data-aos="zoom-in">
            <a href="{{ route('cart') }}" class="btn btn-success px-4 text-white mb-3 me-md-2">
              Add to Cart
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- Description -->
    <section class="store-description">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            {!! $model->description !!}
          </div>
        </div>
        <hr>
      </div>
    </section>

    <!-- Reviews -->
    <section class="store-review">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8 mt-3 mb-3">
            <h5>Customer Reviews (3)</h5>
          </div>
        </div>
        <div class="row">
          <div class="col-12 col-lg-8">
            <ul class="list-unstyled">
              <li class="media d-flex align-items-start">
                <img src="{{ url('images/user_pc.svg') }}" class="rounded-circle me-3" alt="..." />
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Ramadhan Fahmi Habibi</h5>
                  <p>
                    All my girls vintage Chanel baby. So you can have your
                    cake. Tonight, tonight, tonight, I'm walking on air.
                    Slowly swallowing down my fear, yeah yeah. Growing fast
                    into a bolt of lightning. So hot and heavy, 'Til dawn.
                    That fairy tale ending with a knight in shining armor.
                    Heavy is the head that wears the crown.
                  </p>
                </div>
              </li>
              <li class="media d-flex align-items-start">
                <img src="{{ url('images/user_pc.svg') }}" class="align-self-start rounded-circle me-3" alt="..." />
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Alwan Nuha</h5>
                  <p>
                    Maybe a reason why all the doors are closed. Cause once
                    you’re mine, once you’re mine. Be your teenage dream
                    tonight. Heavy is the head that wears the crown. It's
                    not even a holiday, nothing to celebrate. A perfect
                    storm, perfect storm.
                  </p>
                </div>
              </li>
              <li class="media d-flex align-items-start">
                <img src="{{ url('images/user_pc.svg') }}" class="rounded-circle me-3" alt="..." />
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Hamid Yahya</h5>
                  <p>
                    Are you brave enough to let me see your peacock? There’s
                    no going back. This is the last time you say, after the
                    last line you break. At the eh-end of it all.
                  </p>
                </div>
              </li>
              <li class="media d-flex align-items-start">
                <img src="{{ url('images/user_pc.svg') }}" class="rounded-circle me-3" alt="..." />
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Alvin Kurniawan</h5>
                  <p>
                    Are you brave enough to let me see your peacock? There’s
                    no going back. This is the last time you say, after the
                    last line you break. At the eh-end of it all.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
@endsection

@push('add-script')
{{-- Vue JS --}}
<script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
<script>
  var gallery = new Vue({
      el: '#gallery',
      mounted() {
        AOS.init();
      },
      data: {
        activePhoto: 0,
        photos: @json($photos),
      },
      methods: {
        changeActive(id) {
          this.activePhoto = id;
        },
      },
    });
</script>
@endpush
