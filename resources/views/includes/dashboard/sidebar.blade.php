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
'to' => route('dashboard.transactions.index'),
],
[
'label' => 'My Account',
'to' => route('dashboard.setting-account'),
],
[
'label' => 'Store Setting',
'to' => route('dashboard.setting-toko'),
],
];
@endphp

<div class="wrapper" id="wrapper">
  <div class="border-end" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img src="/images/logo.png" alt="" class="my-4" />
    </div>

    <div class="list-group list-group-flush">
      @foreach ($navItems as $navItem) <a href="{{ $navItem['to'] }}"
        class="{{ $navClassName($navItem['to']) }}">{{ $navItem['label'] }}</a>
      @endforeach

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="{{ $navClassName(route('logout')) }}" type="submit">{{ __('Log Out') }}</button>
      </form>
    </div>
  </div>
</div>
