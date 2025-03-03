<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\PackageUserController;
use App\Http\Controllers\OrderProductController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminForPackages;

Route::get('/', function () {
    return view('login');
});

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return view('customer.welcome');
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

Route::middleware([AdminForPackages::class])->group(function () { Route::resource('packages', PackageController::class);});

Route::controller(ProductController::class)->group(function () {
    Route::get('/products', 'index')->name('products.index');
    Route::get('/products/create', 'create')->name('products.create');
    Route::post('/products', 'store')->name('products.store');
    Route::get('/products/{id}', 'show')->name('products.show');
    Route::get('/products/{id}/edit', 'edit')->name('products.edit');
    Route::put('/products/{id}', 'update')->name('products.update');
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
    Route::get('/period', 'index')->name('period.index');
    Route::get('/period/create', 'create')->name('period.create');
    Route::post('/period', 'store')->name('period.store');
    Route::get('/period/{id}', 'show')->name('period.show');
    Route::get('/period/{id}/edit', 'edit')->name('period.edit');
    Route::put('/period/{id}', 'update')->name('period.update');
    Route::delete('/period/{id}', 'destroy')->name('period.destroy');
    Route::get('/period/search', 'search')->name('period.search');
});

Route::controller(ServiceController::class)->group(function () {
    Route::get('/services', 'index')->name('services.index');
    Route::get('/services/create', 'create')->name('service.create');
    Route::post('/services', 'store')->name('service.store');
    Route::get('/services/{id}', 'show')->name('service.show');
    Route::get('/services/{id}/edit', 'edit')->name('service.edit');
    Route::put('/services/{id}', 'update')->name('service.update');
    Route::delete('/services/{id}', 'destroy')->name('service.destroy');
});
