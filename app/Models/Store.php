<?php

namespace App\Models;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;

class Store
{
  public static function getName()
  {
    return self::get('name', config('app.name'));
  }

  public static function setName(string $value)
  {
    return self::set('name', $value);
  }

  public static function getDescription()
  {
    return self::get('description');
  }

  public static function setDescription(string $value)
  {
    return self::set('description', $value);
  }

  public static function getPhoto()
  {
    return self::get('photo');
  }

  public static function setPhoto(UploadedFile $value)
  {
    $storedPath = $value->storePublicly("public/store");
    $success = $storedPath && self::set('photo', $storedPath);
    // delete the old file
    if ($success && Storage::exists(self::getPhoto())) {
      Storage::delete(self::getPhoto());
    }

    return $success;
  }

  public static function getPhotoUrl()
  {
    $path = self::getPhoto();
    return Storage::exists($path)
      ? Storage::url($path)
      : url('/images/logo.png');
  }

  private static function set(string $attrName, $value)
  {
    return Cache::forever("store.{$attrName}", $value);
  }

  private static function get(string $attrName, $default = null)
  {
    return Cache::get("store.{$attrName}", $default);
  }
}
