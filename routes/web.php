<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageUserController;
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
















Route::prefix('packages')->name('packages.')->group(function () {
    Route::get('/', [PackageController::class, 'index'])->name('index'); // عرض جميع الباكدجات
    Route::get('/create', [PackageController::class, 'create'])->name('create'); // عرض نموذج إنشاء باكدج جديدة
    Route::post('/', [PackageController::class, 'store'])->name('store'); // تخزين باكدج جديدة
    Route::get('/{package}', [PackageController::class, 'show'])->name('show'); // عرض باكدج معينة
    Route::get('/{package}/edit', [PackageController::class, 'edit'])->name('edit'); // تعديل باكدج
    Route::put('/{package}', [PackageController::class, 'update'])->name('update'); // تحديث باكدج
    Route::delete('/{package}', [PackageController::class, 'destroy'])->name('destroy'); // حذف باكدج
});



Route::prefix('/package_users')->name('package_users.')->group(function () {
    Route::get('/', [PackageUserController::class, 'index'])->name('index'); // عرض جميع الباكدجات
    Route::get('/create', [PackageUserController::class, 'create'])->name('create'); // عرض نموذج إنشاء باكدج جديدة
    Route::post('/', [PackageUserController::class, 'store'])->name('store'); // تخزين باكدج جديدة
    Route::get('/{packageUser}', [PackageUserController::class, 'show'])->name('show'); // عرض باكدج معينة
    Route::get('/{packageUser}/edit', [PackageUserController::class, 'edit'])->name('edit'); // تعديل باكدج
    Route::put('/{packageUser}', [PackageUserController::class, 'update'])->name('update'); // تحديث باكدج
    Route::delete('/{packageUser}', [PackageUserController::class, 'destroy'])->name('destroy'); // حذف باكدج
});












use App\Http\Middleware\AdminForPackages;




Route::middleware(['auth', 'admin.packages'])->group(function () {
    Route::resource('packages', PackageController::class);
});
