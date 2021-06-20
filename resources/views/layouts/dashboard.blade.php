<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', 'Dashboard')</title>

  @stack('prep-style')
  @include('includes.style')
  @stack('add-style')
</head>

<body>
  {{-- Page Dashboard --}}
  <div class="page-dashboard">
    <div class="d-flex" id="wrapper">
      <!-- Sidebar -->
      @include('includes.dashboard.sidebar')

      <!-- Page Content -->
      <div class="page-content-wrapper" id="page-content-wrapper">

        <!-- Navigation -->
        @include('includes.dashboard.navigation')

        <!-- Section Content -->
        <div class="section-content section-dashboard-home" data-aos="fade-up">
          <div class="container-fluid">

            <div class="dashboard-heading">
              <h2 class="dashboard-title">@yield('dashboard-title')</h2>
              <p class="dashboard-subtitle">@yield('dashboard-subtitle')</p>
            </div>

            @include('includes.notifications')

            <div class="dashboard-content">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @stack('prep-script')
  @include('includes.script')
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
  @stack('add-script')
</body>

</html>
