<?php

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

Route::get('/ban', [App\Http\Controllers\MainController::class, 'ban'])->name('ban');

Route::group(['middleware' => 'ban'], function () {


    Route::get('/blog', [App\Http\Controllers\MainController::class, 'blog'])->name('blog');

    Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('main');

    Route::get('/favorite', [App\Http\Controllers\FavoritsController::class, 'show'])->name('favorits.show');



    Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
    Route::get('/products/cart/{id}', [App\Http\Controllers\ProductController::class, 'toCart'])->name('products.toCart');

    Route::get('/category/{id}', [App\Http\Controllers\ProductController::class, 'shop'])->name('shop');
    Route::get('/cart', [App\Http\Controllers\CartController::class, 'show'])->name('cart.show');


    Route::get('/cart/{id}', [App\Http\Controllers\CartController::class, 'store'])->name('cart.store');


    Route::get('/account', [App\Http\Controllers\ProductController::class, 'account'])->name('account');
    Route::get('/checkout', [App\Http\Controllers\CartController::class, 'checkout'])->name('cart.checkout');

    Route::put('/users/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('users.update');

    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');




    Route::get('/index', [App\Http\Controllers\StripeController::class, 'index'])->name('index');
    Route::post('/checkout', [App\Http\Controllers\StripeController::class, 'checkout'])->name('checkout');
    Route::get('/success', [App\Http\Controllers\StripeController::class, 'success'])->name('success');



});




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
