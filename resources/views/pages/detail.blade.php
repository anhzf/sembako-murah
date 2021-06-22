@inject('formatter', '\App\Helpers\Formatter');
@inject('store', '\App\Models\Store');

@extends('layouts.front')

@section('title', "{$model->name} - {$store->getName()}")

  @php
  $photos = collect(collect($model->photos)->count() ? $model->getPhotosUrl() : ['https://via.placeholder.com/200?' . Arr::query(['text' => 'No image'])]);
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
              <a href="{{ route('order-now', ['model' => $model]) }}"
                class="btn btn-success px-4 text-white mb-3 me-md-2" target="_blank" nofollow noopener>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp"
                  viewBox="0 0 16 16">
                  <path
                    d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
                <small> Pesan sekarang</small>
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
