@extends('layouts.auth')

@section('title')
  Login Page
@endsection

@section('content')
  <x-guest-layout>
    <x-auth-card>
      <x-slot name="logo">
        <a href="/">
          <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
        </a>
      </x-slot>

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <x-input label="Email" type="text" name="email" required autofocus />

        <x-input label="Password" type="password" name="password" required autocomplete="current-password" />

        <x-checkbox :label="__('Remember me')" name="remember" />

        <div class="flex items-center justify-end mt-4">
          @if (Route::has('password.request'))
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
              {{ __('Forgot your password?') }}
            </a>
          @endif

          <x-button class="ml-3">
            {{ __('Log in') }}
          </x-button>
        </div>
      </form>
    </x-auth-card>
  </x-guest-layout>
@endsection
