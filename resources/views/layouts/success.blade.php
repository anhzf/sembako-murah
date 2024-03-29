<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="{{ url('images/icon.png') }}" type="image/x-icon">

  {{-- Style --}}
  @stack('pre-style')
  @include('includes.style')
  @stack('add-style')

</head>

<body>

  {{-- Page Content --}}
  @yield('content')

  {{-- Footer --}}
  @include('includes.footer')

  {{-- Script --}}
  @stack('pre-script')
  @include('includes.script')
  @stack('add-script')
</body>

</html>
