<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PetController;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    // Route::get('/{category}', [HomeController::class,'category'])->name('category.category');
});

//admin
Route::middleware(['admin'])->group(function () {
    Route::resource('admin', AdminController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::resource('pets', PetController::class);
    Route::resource('category', CategoryController::class);
});
