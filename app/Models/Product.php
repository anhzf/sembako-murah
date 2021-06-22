<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

/**
 * @method static \App\Models\Product create(array $attributes = [])
 *
 * @see \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
  use HasFactory,
    SoftDeletes;

  /**
   * The attributes that should be cast.
   *
   * @var array
   */
  protected $casts = [
    'photos' => 'array',
    'meta' => 'array',
  ];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
    'name',
    'price',
    'description',
    'category_id',
    'photos',
    'meta',
  ];

  public function __construct(array $attributes = [])
  {
    parent::__construct($attributes + $this->getDefaultAttributes());
  }

  protected function getDefaultAttributes()
  {
    return [
      'photos' => [],
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

  public function getFullname()
  {
    return "{$this->name}#{$this->getKey()}";
  }

  public function getStoragePath()
  {
    return "public/products/{$this->getKey()}";
  }

  public function getPhotosUrl()
  {
    return collect($this->photos)
      ->map(fn ($path) => Storage::disk('local')->exists($path) ? Storage::url($path) : $path);
  }
}
