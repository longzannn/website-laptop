<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('admin/')->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('category/')->group(function () {
        Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
        Route::get('add_category', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
        Route::post('add_category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
        Route::get('edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
        Route::put('edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
    });

    Route::prefix('product/')->group(function () {
        Route::get('laptop', [\App\Http\Controllers\ProductController::class, 'indexLaptop'])->name('laptop');
        Route::get('accessory', [\App\Http\Controllers\ProductController::class, 'indexAccessory'])->name('accessory');
        Route::get('component', [\App\Http\Controllers\ProductController::class, 'indexComponent'])->name('component');
    });

    Route::prefix('customer/')->group(function () {
        Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer');
    });

    Route::prefix('staff/')->group(function () {
        Route::get('staff', [\App\Http\Controllers\StaffController::class, 'index'])->name('staff');
    });

    Route::prefix('order/')->group(function () {
        Route::get('order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order');
    });

    Route::prefix('subcategory/')->group(function () {
        Route::get('subcategory', [\App\Http\Controllers\SubcategoryController::class, 'index'])->name('subcategory');
    });
});

Route::prefix('client/')->group(function () {
    Route::get('home', [\App\Http\Controllers\HomeLayoutController::class, 'index'])->name('homeLayout');
    Route::get('detail', [\App\Http\Controllers\DetailLayoutController::class, 'index'])->name('detailLayout');
    Route::get('category', [\App\Http\Controllers\CategoryLayoutController::class, 'index'])->name('categoryLayout');
    Route::get('cart', [\App\Http\Controllers\CartLayoutController::class, 'index'])->name('cartLayout');
});
