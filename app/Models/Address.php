<?php

namespace App\Models;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;

class Address
{
  const PROVINCE_CACHE_KEY_NAME = 'address.provinces';
  const CITY_CACHE_KEY_NAME_PREFIX = 'address.city';

  /**
   * @return array
   */
  public static function getProvinces()
  {
    $cached = self::fetchProvinces()->json('provinsi');

    if ($cached === null) {
      Cache::forget(self::PROVINCE_CACHE_KEY_NAME);

      return self::getProvinces();
    }

    return $cached;
  }

  /**
   * @return \Illuminate\Http\Client\Response
   */
  protected static function fetchProvinces()
  {
    return Cache::rememberForever(
      self::PROVINCE_CACHE_KEY_NAME,
      fn () => Http::get('https://dev.farizdotid.com/api/daerahindonesia/provinsi')
    );
  }

  /**
   * @return array
   */
  public static function getCities(int $provinceId)
  {
    $cached = self::fetchCities($provinceId)->json('kota_kabupaten');

    if ($cached === null) {
      Cache::forget(self::CITY_CACHE_KEY_NAME_PREFIX . ".{$provinceId}");

      return self::getCities($provinceId);
    }

    return $cached;
  }

  /**
   * @return \Illuminate\Http\Client\Response
   */
  protected static function fetchCities(int $provinceId)
  {
    return Cache::rememberForever(
      self::CITY_CACHE_KEY_NAME_PREFIX . ".{$provinceId}",
      fn () => Http::get('https://dev.farizdotid.com/api/daerahindonesia/kota', [
        'id_provinsi' => $provinceId
      ])
    );
  }
}
