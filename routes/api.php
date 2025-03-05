<?php

use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\PackageApiController;
use App\Http\Controllers\Api\PackageUserApiController;
use App\Http\Controllers\Api\PeriodController;
use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Resourceful API routes
Route::apiResource('periods', PeriodController::class);

// Additional API routes
Route::get('periods/search', [PeriodController::class, 'search']);
Route::post('/period', [PeriodController::class, 'store']);
Route::get('/period/{id}', [PeriodController::class, 'show']);
Route::match(['put', 'patch'], '/period/{id}', [PeriodController::class, 'update']);
Route::delete('/period/{id}', [PeriodController::class, 'destroy']);

// Products
Route::get('/products', [ProductApiController::class, 'index']);
Route::post('/products/create', [ProductApiController::class, 'store']);
Route::get('/products/show/{id}', [ProductApiController::class, 'show']);
Route::put('/products/update/{id}', [ProductApiController::class, 'update']);
Route::get('/products/delete/{id}', [ProductApiController::class, 'destroy']);

// Package
Route::get('/packages', [PackageApiController::class, 'index']);
Route::post('/packages/create', [PackageApiController::class, 'store']);
Route::get('/packages/show/{id}', [PackageApiController::class, 'show']);
Route::put('/packages/update/{id}', [PackageApiController::class, 'update']);
Route::get('/packages/delete/{id}', [PackageApiController::class, 'destroy']);

// Package_User
Route::get('/package-user', [PackageUserApiController::class, 'index']);
Route::post('/package-user/create', [PackageUserApiController::class, 'store']);
Route::get('/package-user/show/{id}', [PackageUserApiController::class, 'show']);
Route::put('/package-user/update/{id}', [PackageUserApiController::class, 'update']);
Route::get('/package-user/delete/{id}', [PackageUserApiController::class, 'destroy']);

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
