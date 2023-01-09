<?php

use Illuminate\Support\Facades\Route;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

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

    Route::get('/', [App\Http\Controllers\MainController::class, 'main'])->name('main');

    Route::get('/catalog/{name}', [App\Http\Controllers\CatalogController::class, 'show'])->name('catalog.show');

    Route::get('/catalog/{name}/{brand}', [App\Http\Controllers\CatalogController::class, 'showBrand'])->name('catalog.show.brand');

    Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

    Route::middleware("auth")->group(function (){
        Route::get('/products/{id}/addToCart', [App\Http\Controllers\ProductController::class, 'addToCartId'])->name('products.addToCartId');
        Route::post('/products', [App\Http\Controllers\ProductController::class, 'addToCart'])->name('products.addToCart');
        Route::get('/products/{id}/addToFavorite', [App\Http\Controllers\ProductController::class, 'addToFavorite'])->name('products.addToFavorite');

        Route::get('/favorites', [App\Http\Controllers\FavoritesController::class, 'index'])->name('favorites.index');

        Route::get('/cart', [App\Http\Controllers\CartController::class, 'index'])->name('cart.index');

        Route::get('/account', [App\Http\Controllers\AccountController::class, 'show'])->name('account');
        Route::put('/account/{id}', [App\Http\Controllers\AccountController::class, 'update'])->name('account.update');
        Route::put('/account/{id}/password', [App\Http\Controllers\AccountController::class, 'passwordUpdate'])->name('account.password.update');

        Route::get('/order/fail', [App\Http\Controllers\StripeController::class, 'fail'])->name('fail');
        Route::post('/order/checkout', [App\Http\Controllers\StripeController::class, 'checkout'])->name('checkout');
        Route::get('/order/success', [App\Http\Controllers\StripeController::class, 'success'])->name('success');
    });
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

