<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AuthController;

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
//     return view('index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('signin', [AuthController::class, 'signin_view'])->name('signin.index');
Route::post('signin', [AuthController::class, 'sign_in'])->name('signin');

Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::get('signup', [AuthController::class, 'signup_view'])->name('signup.index');
Route::post('signup', [AuthController::class, 'sign_up'])->name('signup');

Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart/add/{product}', [CartController::class, 'addToCart'])->name('cart.add');
Route::delete('cart/remove/{product}', [CartController::class, 'removeFromCart'])->name('cart.remove');

Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
Route::post('checkout', [CheckoutController::class, 'checkout'])->name('checkout');

