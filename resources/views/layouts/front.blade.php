@inject('store', '\App\Models\Store')

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title', $store->getName())</title>

  {{-- Add Style --}}
  @stack('prep-style')
  @include('includes.style')
  @stack('add-style')
</head>

<body>
  {{-- Navigation Bar --}}
  @include('includes.navbar', compact('store'))

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
