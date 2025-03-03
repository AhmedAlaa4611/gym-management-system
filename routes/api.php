<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PeriodController;


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
