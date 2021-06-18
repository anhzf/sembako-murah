<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
  /**
   * The name of the factory's corresponding model.
   *
   * @var string
   */
  protected $model = Product::class;

  /**
   * Define the model's default state.
   *
   * @return array
   */
  public function definition()
  {
    return [
      'name' => collect($this->faker->words(2, true))->join(' '),
      'price' => $this->faker->numberBetween(1000),
      'description' => $this->faker->sentences(3, true),
      'photos' => [
        $this->faker->imageUrl()
      ],
      'category_id' => Category::factory(),
    ];
  }
}
