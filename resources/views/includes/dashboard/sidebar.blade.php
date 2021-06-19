@php
$navClassName = fn(string $to) => 'list-group-item list-group-item-action' . ($to === url()->current() ? ' active' :
'');
$navItems = [
[
'label' => 'Dashboard',
'to' => route('dashboard.index'),
],
[
'label' => 'My Products',
'to' => route('dashboard.products.index'),
],
[
'label' => 'Transactions',
'to' => '/dashboard-transactions.html',
],
[
'label' => 'My Account',
'to' => route('dashboard.setting-account'),
],
[
'label' => 'Store Setting',
'to' => '/dashboard-store-setting.html',
],
];
@endphp

<div class="border-end" id="sidebar-wrapper">
  <div class="sidebar-heading text-center">
    <img src="/images/logo.svg" alt="" class="my-4" />
  </div>

  <div class="list-group list-group-flush">
    @foreach ($navItems as $navItem) <a href="{{ $navItem['to'] }}"
      class="{{ $navClassName($navItem['to']) }}">{{ $navItem['label'] }}</a>
    @endforeach

    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <button class="{{ $navClassName(route('logout')) }}" type="submit">{{ __('Log Out') }}</button>
    </form>

    {{-- Cara lain --}}

    {{-- <a href="{{ url('/dashboard') }}"
    class="list-group-item list-group-item-action {{ (request()->is('dashboard')) ? 'active' : '' }}">Dashboard</a>
    <a href="{{ url('/dashboard/products') }}"
      class="list-group-item list-group-item-action {{ (request()->segment(2) == 'products') ? 'active' : '' }}">My
      Products</a>
    <a href="/dashboard-transactions.html" class="list-group-item list-group-item-action">Transactions</a>
    <a href="/dashboard-account.html" class="list-group-item list-group-item-action">My Account</a>
    <a href="/dashboard-settings.html" class="list-group-item list-group-item-action">Store Setting</a>
    <a href="/index.html" class="list-group-item list-group-item-action">Sign Out</a> --}}
  </div>
</div>
