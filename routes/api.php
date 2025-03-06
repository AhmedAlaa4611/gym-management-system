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
use App\Http\Middleware\EnsureUserIsAdmin;
use App\Http\Middleware\EnsureUserIsCustomer;
use App\Http\Middleware\EnsureUserIsGymOwner;
use App\Http\Middleware\EnsureUserIsStoreOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

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

    Route::middleware(EnsureUserIsGymOwner::class)->group(function () {
        // Additional API routes
        Route::get('/period', [PeriodController::class, 'index']);
        Route::post('/period', [PeriodController::class, 'store']);
        Route::get('/period/{period}', [PeriodController::class, 'show']);
        Route::put('/period/{period}', [PeriodController::class, 'update'])->can('handle', 'period');
        Route::delete('/period/{period}', [PeriodController::class, 'destroy'])->can('handle', 'period');

        // Service
        Route::get('/services', [ServiceApiController::class, 'index']);
        Route::post('/services/create', [ServiceApiController::class, 'store']);
        Route::get('/services/{service}', [ServiceApiController::class, 'show']);
        Route::put('/services/{service}', [ServiceApiController::class, 'update'])->can('handle', 'service');
        Route::delete('/services/{service}', [ServiceApiController::class, 'destroy'])->can('handle', 'service');
    });

    Route::middleware(EnsureUserIsStoreOwner::class)->group(function () {
        // Products
        Route::get('/products', [ProductApiController::class, 'index']);
        Route::post('/products/create', [ProductApiController::class, 'store']);
        Route::get('/products/{product}', [ProductApiController::class, 'show']);
        Route::put('/products/{product}', [ProductApiController::class, 'update']);
        Route::delete('/products/{product}', [ProductApiController::class, 'destroy']);
    });

    Route::middleware(EnsureUserIsAdmin::class)->group(function () {
        // Package
        Route::get('/packages', [PackageApiController::class, 'index']);
        Route::post('/packages/create', [PackageApiController::class, 'store']);
        Route::get('/packages/{package}', [PackageApiController::class, 'show']);
        Route::put('/packages/{package}', [PackageApiController::class, 'update']);
        Route::delete('/packages/{package}', [PackageApiController::class, 'destroy']);

        // Package_User
        Route::get('/package-user', [PackageUserApiController::class, 'index']);
        Route::post('/package-user/create', [PackageUserApiController::class, 'store']);
        Route::get('/package-user/{id}', [PackageUserApiController::class, 'show']);
        Route::put('/package-user/{id}', [PackageUserApiController::class, 'update']);
        Route::delete('/package-user/{id}', [PackageUserApiController::class, 'destroy']);
    });

    Route::middleware(EnsureUserIsCustomer::class)->group(function () {
        // Cart
        Route::get('/cart', [CartApiController::class, 'index']);
        Route::get('/addtoCart/{id}', [CartApiController::class, 'addToCart']);
    });

});
