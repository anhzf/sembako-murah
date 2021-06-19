<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

Route::view('/', 'pages.home')
  ->name('home');

Route::view('/categories', 'pages.category')
  ->name('categories');

Route::view('/details/{id}', 'pages.details')
  ->name('detail');

Route::view('/cart', 'pages.cart')
  ->name('cart');

Route::view('/success', 'pages.success')
  ->name('success');

Route::prefix('/dashboard')
  ->name('dashboard.')
  ->middleware('auth')
  ->group(function () {

    Route::view('/', 'pages.dashboard.index')
      ->name('index');

    Route::view('/account', 'pages.dashboard.account-settings')
      ->name('setting-account');

    Route::prefix('/products')
      ->name('products.')
      ->group(function () {

        Route::view('/', 'pages.dashboard.products-list', ['products' => Product::all()])
          ->name('index');

        Route::view('/{id}', 'pages.dashboard.products-detail')
          ->name('detail');

        Route::view('/add', 'pages.dashboard.products-create')
          ->name('add');
      });
  });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
