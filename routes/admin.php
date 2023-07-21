<?php

use Illuminate\Support\Facades\Route;


Route::prefix('admin')->group(function () {
    Route::get('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'login'])->name('admin.auth.login');
    Route::post('login', [App\Http\Controllers\Auth\AdminLoginController::class, 'loginAdmin'])->name('admin.auth.loginAdmin');
    Route::post('logout', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.auth.logout');
});

Route::group(['middleware' => ['auth:admin']], function () {
    Route::prefix('admin')->group(function () {
        Route::get('/dashboard', [App\Http\Controllers\MainController::class, 'admin'])->name('admin');


        Route::get('/users', [App\Http\Controllers\AdminController\UserController::class, 'index'])->name('admin.users.index');
        Route::get('/users/{id}/edit', [App\Http\Controllers\AdminController\UserController::class, 'edit'])->name('admin.users.edit');
        Route::put('/users/{id}', [App\Http\Controllers\AdminController\UserController::class, 'update'])->name('admin.users.update');
        Route::delete('/users/{id}', [App\Http\Controllers\AdminController\UserController::class, 'destroy'])->name('admin.users.destroy');
        Route::post('/users/{id}/login', [App\Http\Controllers\AdminController\UserController::class, 'login'])->name('admin.users.login');
        Route::post('/users/{id}/ban', [App\Http\Controllers\AdminController\UserController::class, 'ban'])->name('admin.users.ban');
        Route::post('/users/{id}/unban', [App\Http\Controllers\AdminController\UserController::class, 'unban'])->name('admin.users.unban');


        Route::get('/products', [App\Http\Controllers\AdminController\ProductController::class, 'index'])->name('admin.products.index');
        Route::get('/products/{id}/edit', [App\Http\Controllers\AdminController\ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/products/{id}', [App\Http\Controllers\AdminController\ProductController::class, 'update'])->name('admin.products.update');
        Route::get('/products/delete/{id}', [App\Http\Controllers\AdminController\ProductController::class, 'destroy'])->name('admin.products.destroy');
        Route::get('/products/create', [App\Http\Controllers\AdminController\ProductController::class, 'create'])->name('admin.products.create');
        Route::post('/products', [App\Http\Controllers\AdminController\ProductController::class, 'store'])->name('admin.products.store');

        Route::get('/comments/index/{product_id}', [App\Http\Controllers\AdminController\CommentController::class, 'index'])->name('admin.comments.index');
        Route::delete('/comments/{id}', [App\Http\Controllers\AdminController\CommentController::class, 'destroy'])->name('admin.comments.destroy');



        Route::get('/categories', [App\Http\Controllers\AdminController\CategoryController::class, 'index'])->name('admin.categories.index');
        Route::get('/categories/{id}/edit', [App\Http\Controllers\AdminController\CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/categories/{id}', [App\Http\Controllers\AdminController\CategoryController::class, 'update'])->name('admin.categories.update');
        Route::get('/categories/{id}/destroy', [App\Http\Controllers\AdminController\CategoryController::class, 'destroy'])->name('admin.categories.destroy');
        Route::get('/categories/{id}/restore', [App\Http\Controllers\AdminController\CategoryController::class, 'restore'])->name('admin.categories.restore');
        Route::get('/categories/create', [App\Http\Controllers\AdminController\CategoryController::class, 'create'])->name('admin.categories.create');
        Route::post('/categories', [App\Http\Controllers\AdminController\CategoryController::class, 'store'])->name('admin.categories.store');

        Route::get('/brands', [App\Http\Controllers\AdminController\BrandController::class, 'index'])->name('admin.brands.index');
        Route::get('/brands/{id}/edit', [App\Http\Controllers\AdminController\BrandController::class, 'edit'])->name('admin.brands.edit');
        Route::put('/brands/{id}', [App\Http\Controllers\AdminController\BrandController::class, 'update'])->name('admin.brands.update');
        Route::get('/brands/{id}/destroy', [App\Http\Controllers\AdminController\BrandController::class, 'destroy'])->name('admin.brands.destroy');
        Route::get('/brands/{id}/hide', [App\Http\Controllers\AdminController\BrandController::class, 'hide'])->name('admin.brands.hide');
        Route::get('/brands/{id}/unhide', [App\Http\Controllers\AdminController\BrandController::class, 'unhide'])->name('admin.brands.unhide');
        Route::get('/brands/create', [App\Http\Controllers\AdminController\BrandController::class, 'create'])->name('admin.brands.create');
        Route::post('/brands', [App\Http\Controllers\AdminController\BrandController::class, 'store'])->name('admin.brands.store');


        Route::get('/transactions', [App\Http\Controllers\AdminController\TransactionsController::class, 'index'])->name('admin.transactions.index');
        Route::get('/transactions/{stripe_id}', [App\Http\Controllers\AdminController\TransactionsController::class, 'show'])->name('admin.transactions.show');

    });
});
