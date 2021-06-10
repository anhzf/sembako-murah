<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('transactions', function (Blueprint $table) {
      $table->id();
      $table->foreignId('user_id')
        ->constrained('users')
        ->onUpdate('cascade')
        ->onDelete('restrict');
      $table->integer('shipping_price');
      $table->integer('total_price');
      $table->enum('transaction_status', ['UNPAID', 'PENDING', 'SHIPPING', 'SUCCESS', 'FAILED']);
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('transactions');
  }
}
