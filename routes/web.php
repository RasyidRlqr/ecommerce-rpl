<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Route Publik
|--------------------------------------------------------------------------
| Katalog produk dan detail produk yang bisa diakses tanpa login
*/
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');
Route::get('/produk/{slug}', [ProductController::class, 'show'])->name('produk.show');

/*
|--------------------------------------------------------------------------
| Authentication Routes
|--------------------------------------------------------------------------
*/
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

/*
|--------------------------------------------------------------------------
| Route Admin (Harus Login)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // CRUD untuk admin
    Route::resource('orders', OrderController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);

    // Default home diarahkan ke dashboard
    Route::get('/', [DashboardController::class, 'index']);
});
