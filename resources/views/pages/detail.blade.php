@extends('layouts.app')

@section('title')
Detail Page
@endsection

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
                <a href="/index.html">Home</a>
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
            <img :src="photos[activePhoto].url" :key="photos[activePhoto].id" class="w-100 main-image" alt="" />
          </transition>
        </div>
        <div class="col-lg-2">
          <div class="row">
            <div class="col-3 col-lg-12 mt-2 mt-lg-0" v-for="(photo, index) in photos" :key="photo.id"
              data-aos="zoom-in" data-aos-delay="100">
              <a href="#" @click="changeActive(index)">
                <img :src="photo.url" alt="" class="w-100 thumbnail-image" :class="{active: index == activePhoto}" />
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
    <section class="store-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <h1>Sembako Murah</h1>
            <div class="owner">By Fahmi Habibi</div>
            <div class="price">Rp 12.000,00</div>
          </div>
          <div class="col-lg-2 d-grid gap-2 d-lg-block" data-aos="zoom-in">
            <a href="/cart.html" class="btn btn-success px-4 text-white mb-3 me-md-2">
              Add to Cart</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Description -->
    <section class="store-description">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <p>
              Lorem ipsum, dolor sit amet consectetur adipisicing elit.
              Cupiditate ab quos odit rem obcaecati officiis totam voluptas
              architecto repellat veniam doloribus quisquam accusamus quidem
              quasi, commodi dignissimos, fugit temporibus consequatur.
            </p>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque
              qui architecto sit! Fugit dolorem hic illo repudiandae
              consequatur excepturi? Eius rerum laborum soluta saepe alias
              nesciunt quibusdam neque eos cupiditate.
            </p>
          </div>
        </div>
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
                <img src="./images/user_pc.svg" class="mr-3 rounded-circle me-3" alt="..." />
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
                <img src="./images/user_pc.svg" class="align-self-start mr-3 rounded-circle me-3" alt="..." />
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
                <img src="./images/user_pc.svg" class="mr-3 rounded-circle me-3" alt="..." />
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
                <img src="./images/user_pc.svg" class="mr-3 rounded-circle me-3" alt="..." />
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
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 0,
          photos: [
            {
              id: 1,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 4,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
</script>
@endpush
