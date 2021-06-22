@inject('gate', '\Illuminate\Support\Facades\Gate')
@php
$navClassName = fn(string $to) => 'list-group-item list-group-item-action' . ($to === url()->current() ? ' active' : '');
$navItems = [
    [
        'label' => 'Dashboard',
        'to' => route('dashboard.index'),
        'hasAccess' => $gate::allows('organize-store'),
    ],
    [
        'label' => 'My Products',
        'to' => route('dashboard.products.index'),
        'hasAccess' => $gate::allows('organize-store'),
    ],
    [
        'label' => 'Transactions',
        'to' => route('dashboard.transactions.index'),
        'hasAccess' => true,
    ],
    [
        'label' => 'My Account',
        'to' => route('dashboard.setting-account'),
        'hasAccess' => true,
    ],
    [
        'label' => 'Store Setting',
        'to' => route('dashboard.setting-toko'),
        'hasAccess' => $gate::allows('organize-store'),
    ],
];
@endphp

<div class="wrapper" id="wrapper">
  <div class="border-end" id="sidebar-wrapper">
    <div class="sidebar-heading text-center">
      <img src="{{ url('/images/logo.png') }}" alt="" class="my-4" />
    </div>

    <div class="list-group list-group-flush">
      @foreach ($navItems as $navItem)
        @if ($navItem['hasAccess'])
          <a href="{{ $navItem['to'] }}" class="{{ $navClassName($navItem['to']) }}">{{ $navItem['label'] }}</a>
        @endif
      @endforeach

      <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button class="{{ $navClassName(route('logout')) }}" type="submit">{{ __('Log Out') }}</button>
      </form>
    </div>
  </div>
</div>
