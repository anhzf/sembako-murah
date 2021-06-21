<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;

class Store
{
  public static function getName()
  {
    return Cache::get('store.name', config('app.name'));
  }

  public static function updateName(string $name)
  {
    return Cache::forever('store.name', $name);
  }
}
