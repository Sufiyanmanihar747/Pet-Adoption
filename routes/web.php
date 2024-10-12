<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdoptionController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PetController;
use App\Http\Middleware\OwnerAuth;
use Illuminate\Support\Facades\Auth;


Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('category/id{category}', [CategoryController::class, 'categoryId'])->name('category.categoryId');
Route::get('pets/id/{pet}', [PetController::class, 'allPets'])->name('pets.allPets');

Route::middleware('auth')->group(function () {
    Route::resource('adopt', AdoptionController::class);
});

Route::resource('payment', PaymentController::class);

//owner
Route::middleware('owner')->group(function () {
    Route::resource('owner', OwnerController::class);
});


//admin
Route::middleware(['admin'])->group(function () {
    Route::resource('pets', PetController::class);
    Route::resource('admin', AdminController::class);
    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('request', [AdminController::class, 'request'])->name('admin.request');
    Route::get('accept/{id}', [AdminController::class, 'accept'])->name('admin.accept');
    Route::delete('reject/{id}', [AdminController::class, 'reject'])->name('admin.reject');
    Route::get('orders', [AdminController::class, 'orders'])->name('admin.orders');
    Route::resource('category', CategoryController::class);
});
