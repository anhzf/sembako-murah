<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    // will always generate exactly as the number below
    $generate = 50;
    $rand = rand(0, $generate);
    // verifed account always more than unverified
    $verified = $rand > 25 ? $rand : ($generate - $rand);

    User::factory()
      ->count($verified)
      ->create();

    User::factory()
      // the rest of verifed accounts
      ->count($generate - $verified)
      ->unverified()
      ->create();
  }
}
