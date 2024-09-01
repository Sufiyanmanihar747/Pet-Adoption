<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

//admin
Route::middleware(['admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::resource('pets', PetController::class);
});
