<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  use HasFactory;

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
    'photos' => 'array',
    'meta' => 'array',
  ];

  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes + $this->getDefaultAttributes());
  }

  protected function getDefaultAttributes()
  {
    return [
      'meta' => [],
    ];
  }

  /**
   * Get the category that owns the product.
   */
  public function category()
  {
    return $this->belongsTo(Category::class);
  }
}
