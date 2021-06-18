<nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
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
          Hi Fahmi
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a>

          <a class="dropdown-item" href="">Setting</a>

          <hr class="dropdown-divider" />

          <a class="dropdown-item" href="/">Logout</a>
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
        <a href="#" class="nav-link"> Hi, Fahmi</a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link d-inline-block"> Cart</a>
      </li>
    </ul>
  </div>
</nav>
