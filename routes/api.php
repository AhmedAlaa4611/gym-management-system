<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\CartApiController;
use App\Http\Controllers\Api\PackageApiController;
use App\Http\Controllers\Api\PackageUserApiController;
use App\Http\Controllers\Api\PeriodController;
use App\Http\Controllers\Api\ProductApiController;
use App\Http\Controllers\Api\ServiceApiController;
use App\Http\Middleware\EnsureUserIsCustomer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Additional API routes
Route::get('/period', [PeriodController::class, 'index']);
Route::post('/period', [PeriodController::class, 'store']);
Route::get('/period/{period}', [PeriodController::class, 'show']);
Route::put('/period/{period}', [PeriodController::class, 'update'])->can('handle', 'period');
Route::delete('/period/{period}', [PeriodController::class, 'destroy'])->can('handle', 'period');

// Products
Route::get('/products', [ProductApiController::class, 'index']);
Route::post('/products/create', [ProductApiController::class, 'store']);
Route::get('/products/show/{product}', [ProductApiController::class, 'show']);
Route::put('/products/update/{product}', [ProductApiController::class, 'update']);
Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);

// Package
Route::get('/packages', [PackageApiController::class, 'index']);
Route::post('/packages/create', [PackageApiController::class, 'store']);
Route::get('/packages/show/{package}', [PackageApiController::class, 'show']);
Route::put('/packages/update/{package}', [PackageApiController::class, 'update']);
Route::delete('/packages/{package}', [PackageApiController::class, 'destroy']);

// Package_User
Route::get('/package-user', [PackageUserApiController::class, 'index']);
Route::post('/package-user/create', [PackageUserApiController::class, 'store']);
Route::get('/package-user/show/{id}', [PackageUserApiController::class, 'show']);
Route::put('/package-user/update/{id}', [PackageUserApiController::class, 'update']);
Route::delete('/package-user/{id}', [PackageUserApiController::class, 'destroy']);

// Service
Route::get('/services', [ServiceApiController::class, 'index']);
Route::post('/services/create', [ServiceApiController::class, 'store']);
Route::get('/services/show/{service}', [ServiceApiController::class, 'show']);
Route::put('/services/update/{service}', [ServiceApiController::class, 'update'])->can('handle', 'service');
Route::delete('/services/{service}', [ServiceApiController::class, 'destroy'])->can('handle', 'service');

// Cart
Route::middleware(['auth:sanctum', EnsureUserIsCustomer::class])->group(function () {

    Route::get('/cart', [CartApiController::class, 'index']);
    Route::get('/addtoCart/{id}', [CartApiController::class, 'addToCart']);

});

Route::middleware('guest')->group(function () {

    Route::controller(RegisterController::class)->group(function () {
        Route::get('/register', 'create');
        Route::post('/register', 'store');
    });

    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'create');
        Route::post('/login', 'store');
    });

});

Route::middleware('auth:sanctum')->group(function () {

    Route::controller(AuthController::class)->group(function () {
        Route::delete('/logout', 'destroy');
    });

});
