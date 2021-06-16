<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>

  @stack('prep-style')
  @include('includes.style')
  @stack('add-style')
</head>

<body>
  <div class="page-dashboard">
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      <div class="border-end" id="sidebar-wrapper">
        <div class="sidebar-heading text-center">
          <img src="/images/logo.svg" alt="" class="my-4" />
        </div>
        <div class="list-group list-group-flush">
          <a href="/dashboard.html" class="list-group-item list-group-item-action active">Dashboard</a>
          <a href="/dashboard-products.html" class="list-group-item list-group-item-action">My Products</a>
          <a href="/dashboard-transactions.html" class="list-group-item list-group-item-action">Transactions</a>
          <a href="/dashboard-account.html" class="list-group-item list-group-item-action">My Account</a>
          <a href="/dashboard-settings.html" class="list-group-item list-group-item-action">Store Setting</a>
          <a href="/index.html" class="list-group-item list-group-item-action">Sign Out</a>
        </div>
      </div>

      <!-- Page Content -->
      <div class="page-content-wrapper" id="page-content-wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light navbar-store fixed-top">
          <button class="btn btn-secondary d-md-none me-auto id=" menu-toggle">
            &laquo; Menu
          </button>
          {{-- <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> --}}
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <!-- Dekstop Menu-->
            <ul class="navbar-nav d-none d-lg-flex ms-auto">
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                  aria-expanded="false" aria-haspopup="true">
                  <img src="/images/user_pc.svg" alt="" class="rounded-circle me-2 profile-pricture" />
                  Hi Fahmi
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="/dashboard.html">Dashboard</a>

                  <a class="dropdown-item" href="/dashboard-account.html">Setting</a>

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

        <!-- Section Content -->
        @yield('content')
      </div>
    </div>
  </div>

  @stack('prep-script')
  @include('includes.script')
  @stack('add-script')
</body>

</html>
