<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\AccountController as DashboardAccountController;
use App\Http\Controllers\Dashboard\ProductController as DashboardProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\URL;

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

Route::get('/', [HomeController::class, 'index'])
  ->name('home');

Route::get('/categories', [CategoryController::class, 'index'])
  ->name('categories');

Route::view('/about', 'pages.about')
  ->name('about');

Route::get('/details/{model}', [ProductController::class, 'show'])
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

    Route::get('/account', [DashboardAccountController::class, 'index'])
      ->name('setting-account');
    Route::post('/account', [DashboardAccountController::class, 'saveSettings']);

    Route::view('/setting', 'pages.dashboard.setting')
      ->name('setting-toko');


    Route::prefix('/transactions')
      ->name('transactions.')
      ->group(function () {

        Route::view('/', 'pages.dashboard.transactions')
          ->name('index');

        Route::view('/{id}', 'pages.dashboard.transactions-detail')
          ->name('/detail');

        Route::view('/myorder/{id}', 'pages.dashboard.transactions-myorder')
          ->name('/myorder-detail');
      });


    Route::prefix('/products')
      ->name('products.')
      ->group(function () {

        Route::get('/', [DashboardProductController::class, 'index'])
          ->name('index');

        Route::get('/add', [DashboardProductController::class, 'create'])
          ->name('create');
        Route::post('/add', [DashboardProductController::class, 'store'])
          ->name('store');

        Route::get('/{model}', [DashboardProductController::class, 'show'])
          ->name('show');
        Route::post('/{model}', [DashboardProductController::class, 'update'])
          ->name('update');

        Route::delete('/{model}', [DashboardProductController::class, 'destroy'])
          ->name('destroy');
      });
  });

require __DIR__ . '/auth.php';
