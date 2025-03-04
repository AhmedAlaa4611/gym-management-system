<?php

use App\Http\Controllers\Api\PeriodController;
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
