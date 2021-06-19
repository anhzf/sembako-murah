<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', [HomeController::class, 'index'])
  ->name('home');

Route::get('/categories', [CategoryController::class, 'index'])
  ->name('categories');

Route::get('/details/{id}', [DetailController::class, 'index'])
  ->name('detail');

Route::get('/cart', [CartController::class, 'index'])
  ->name('cart');

Route::get('/success', [CartController::class, 'success'])
  ->name('success');

Route::prefix('/dashboard')
  ->name('dashboard.')
  ->middleware('auth')
  ->group(function () {

    Route::get('/', [DashboardController::class, 'index'])
      ->name('index');

    Route::get('/account', [DashboardSettingController::class, 'account'])
      ->name('setting-account');

    Route::prefix('/products')
      ->name('products.')
      ->group(function () {

        Route::get('/', [DashboardProductController::class, 'index'])
          ->name('index');

        Route::get('/add', [DashboardProductController::class, 'addmenu'])
          ->name('add');

        Route::get('/{id}', [DashboardProductController::class, 'detail'])
          ->name('detail');
      });
  });


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
