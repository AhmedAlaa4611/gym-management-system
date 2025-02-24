<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'create')->name('register.create');
    Route::post('/register', 'store')->name('register.store');
});

Route::controller(LoginController::class)->group(function () {
    Route::get('/login', 'create')->name('login.create');
    Route::post('/login', 'store')->name('login.store');
});

Route::controller(AuthController::class)->group(function () {
    Route::delete('/logout', 'destroy')->name('logout');
});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/{id}', 'show')->name('products.show');
    Route::get('/products/{id}/edit', 'edit')->name('products.edit');
    Route::put('/products/update', 'update')->name('products.update');
    Route::delete('/products/{id}', 'destroy')->name('products.destroy');
});

Route::controller(OrderProductController::class)->group(function () {
    Route::get('/orderproducts', 'index')->name('orderproducts.index');
    Route::get('/orderproducts/create', 'create')->name('orderproducts.create');
    Route::post('/orderproducts', 'store')->name('orderproducts.store');
    Route::get('/orderproducts/{id}', 'show')->name('orderproducts.show');
    Route::get('/orderproducts/{id}/edit', 'edit')->name('orderproducts.edit');
    Route::put('/orderproducts/{id}', 'update')->name('orderproducts.update');
    Route::delete('/orderproducts/{id}', 'destroy')->name('orderproducts.destroy');
});

Route::controller(PeriodController::class)->group(function () {
    Route::get('/period/create', 'create')->name('period.create');
    Route::post('/period/store', 'store')->name('period.store');
    Route::get('/period', 'index')->name('period.period');

    Route::get('/period/{id}/edit', 'edit')->name('period.edit');
    Route::put('/period/{id}', 'update')->name('period.update');

    Route::delete('/period/{id}', 'destroy')->name('period.destroy');

    Route::get('/period/search', 'search')->name('period.search');
    Route::get('/period/{id}', 'show')->name('period.show');
});
