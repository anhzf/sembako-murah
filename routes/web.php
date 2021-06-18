<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\DashboardProductController;
use App\Http\Controllers\DashboardSettingController;

use App\Http\Controllers\Auth\RegisterController;
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

Route::get('/register/success', [RegisterController::class, 'success'])
  ->name('register-success');

Route::get('/dashboard', [DashboardController::class, 'index'])
  ->name('dashboard');

Route::get('/dashboard/products', [DashboardProductController::class, 'index'])->name('dashboard-product');
Route::get('/dashboard/products/add', [DashboardProductController::class, 'addmenu'])->name('dashboard-product-addmenu');
Route::get('/dashboard/products/{id}', [DashboardProductController::class, 'detail'])->name('dashboard-product-detail');

Route::get('/dashboard/account', [DashboardSettingController::class, 'account'])->name('dashboard-setting-account');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
