<nav class="
        navbar navbar-expand-lg navbar-light navbar-store
        fixed-top
        navbar-fixed-top
      " data-aos="fade-down">
  <div class="container">
    <a class="navbar-brand" href="{{ route('home') }}">
      <img src="/images/logo.svg" alt="" />
      <span class="ms-3">{{ $store->getName() }}</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
            href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->segment(1) == 'categories' ? 'active' : '' }}"
            href="{{ route('categories') }}">Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ url('about') }}">About</a>
        </li>

        @guest
          <li class="nav-item">

            <a class="nav-link" href="{{ route('register') }}">Sign
              Up</a>
          </li>
          <li class="nav-item">
            <a class="btn btn-success nav-link px-4 text-white" href="{{ route('login') }}">Sign In</a>
          </li>
        @endguest
      </ul>
      @auth
        <!-- Dekstop Menu-->
        <ul class="navbar-nav d-none d-lg-flex">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
              aria-expanded="false">
              <img src="/images/user_pc.svg" alt="" class="rounded-circle me-2 profile-pricture" />
              Hi, {{ Auth::user()->name }}
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{ url('/dashboard') }}">Dashboard</a>

              <a class="dropdown-item" href="{{ url('/dashboard/setting') }}">Setting</a>

              <hr class="dropdown-divider" />

              <a class="dropdown-item" href="{{ route('logout') }}"
                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </div>
          </li>
          <li class="nav-item">
            <a href="{{ route('cart') }}" class="nav-link d-inline-block mt-2">

              @php
                // iki gawenen wan
                // yoww
                $carts = 1;
              @endphp
              @if ($carts > 0)
                <img src="/images/shopping-filled.svg" alt="" />
                <div class="card-badge">{{ $carts }}
                </div>
              @else
                <img src="/images/shopping-empty.svg" alt="" />
              @endif
            </a>
          </li>
        </ul>
        <!-- + Dropdown -->
        <ul class="navbar-nav d-block d-lg-none">
          <li class="nav-item">
            <a href="#" class="nav-link">
              Hi, {{ Auth::user()->name }}
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('cart') }}" class="nav-link d-inline-block">Cart</a>
          </li>
        </ul>
      @endauth

      </ul>
    </div>
  </div>
</nav>
