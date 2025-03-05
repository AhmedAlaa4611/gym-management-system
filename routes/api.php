<?php

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
Route::get('/periods/user/{user_id}', [PeriodController::class, 'getByUser']);


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
