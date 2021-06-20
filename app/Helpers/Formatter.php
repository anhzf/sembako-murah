<?php

namespace App\Helpers;

class Formatter
{
  /**
   * @var \NumberFormatter|null not null if class is exists
   */
  private static $idr;

  public static function intToIdr(int $n)
  {
    if (class_exists(\NumberFormatter::class)) {
      if (empty($idr)) {
        Formatter::$idr = new \NumberFormatter('id', \NumberFormatter::CURRENCY);
      }

      return Formatter::$idr->formatCurrency($n, 'IDR');
    }

    return 'Rp ' . number_format($n, 0, ',', '.');
  }
}
