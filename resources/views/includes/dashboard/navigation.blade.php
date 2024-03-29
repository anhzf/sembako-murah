<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
  <div class="container-fluid">

    <button class="btn btn-secondary d-md-none me-auto" id="menu-toggle">
      &laquo; Menu
    </button>

    <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
      aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarResponsive">
      <!-- Dekstop Menu-->
      <ul class="navbar-nav d-none d-lg-flex ms-auto">
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"
            aria-haspopup="true">
            <img src="/images/user_pc.svg" alt="" class="rounded-circle me-2 profile-pricture" />
            <span>Hi, {{ Auth::user()->name }}</span>
          </a>

          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            {{-- <a class="dropdown-item" href="{{ route('dashboard.index') }}">Dashboard</a> --}}
            <a class="dropdown-item" href="{{ route('home') }}">Store</a>
            <a class="dropdown-item" href="">Setting</a>

            <hr class="dropdown-divider" />

            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button class="dropdown-item" type="submit">{{ __('Log Out') }}</button>
            </form>
          </div>
        </li>

        <li class="nav-item">
          <a href="#" class="nav-link d-inline-block mt-2">
            <img src="/images/shopping-empty.svg" alt="" />
          </a>
        </li>
      </ul>
      <!-- + Dropdown -->
      <ul class="navbar-nav d-block d-lg-none mt-3">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a href="{{ route('dashboard.index') }}" class="nav-link">{{ Auth::user()->name }}</a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link d-inline-block"> Cart</a>
        </li>
      </ul>
    </div>
  </div>
</nav>