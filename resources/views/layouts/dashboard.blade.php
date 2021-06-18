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
        @yield('content')
      </div>
    </div>
  </div>

  <script>
    $("#menu-toggle").click(function (e) {
          e.preventDefault();
          $("#wrapper").toggleClass("toggled");
        });
  </script>
  @stack('prep-script')
  @include('includes.script')
  @stack('add-script')
</body>

</html>
