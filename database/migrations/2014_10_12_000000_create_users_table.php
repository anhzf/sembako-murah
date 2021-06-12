<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('users', function (Blueprint $table) {
      $table->id();
      $table->string('name');
      $table->string('email')->unique();
      $table->timestamp('email_verified_at')->nullable();
      $table->string('password');
      $table->boolean('is_admin')
        ->default(false);
      $table->rememberToken();
      $table->timestamps();
      // user biodata
      $table->text('address_one')->nullable();
      $table->text('address_two')->nullable();
      $table->string('province_id')->nullable();
      $table->string('regency_id')->nullable();
      $table->string('zip_code')->nullable();
      $table->string('country')->nullable();
      $table->string('phone_number')->nullable();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('users');
  }
}
