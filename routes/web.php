<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PeriodController;
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

