<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin/')->group(function () {
    // Route dashboard
    Route::middleware('checkLoginStaff')->get('dashboard', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Route category
    Route::middleware('checkLoginStaff')->prefix('category/')->group(function () {
        Route::get('category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category.index');
        Route::get('add_category', [\App\Http\Controllers\CategoryController::class, 'create'])->name('category.create');
        Route::post('add_category', [\App\Http\Controllers\CategoryController::class, 'store'])->name('category.store');
        Route::get('edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'edit'])->name('category.edit');
        Route::put('edit_category/{id}', [\App\Http\Controllers\CategoryController::class, 'update'])->name('category.update');
        Route::delete('category/{id}', [\App\Http\Controllers\CategoryController::class, 'destroy'])->name('category.destroy');
    });

    // Route product
    Route::middleware('checkLoginStaff')->prefix('product/')->group(function () {
        Route::get('laptop', [\App\Http\Controllers\ProductController::class, 'indexLaptop'])->name('product.laptop');
        Route::get('component', [\App\Http\Controllers\ProductController::class, 'indexComponent'])->name('product.component');
        Route::get('add_product', [\App\Http\Controllers\ProductController::class, 'create'])->name('product.create');
        Route::post('add_product', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');
        Route::get('edit_product/{id}', [\App\Http\Controllers\ProductController::class, 'edit'])->name('product.edit');
        Route::put('edit_product/{id}', [\App\Http\Controllers\ProductController::class, 'update'])->name('product.update');
        Route::delete('laptop/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
        Route::delete('component/{id}', [\App\Http\Controllers\ProductController::class, 'destroy'])->name('product.destroy');
    });

    // Route customer
    Route::middleware('checkLoginStaff')->prefix('customer/')->group(function () {
        Route::get('customer', [\App\Http\Controllers\CustomerController::class, 'index'])->name('customer.index');
//        Route::get('add_customer', [\App\Http\Controllers\CustomerController::class, 'create'])->name('customer.create');
//        Route::post('add_customer', [\App\Http\Controllers\CustomerController::class, 'store'])->name('customer.store');
        Route::get('edit_customer/{id}', [\App\Http\Controllers\CustomerController::class, 'edit'])->name('customer.edit');
        Route::put('edit_customer/{id}', [\App\Http\Controllers\CustomerController::class, 'update'])->name('customer.update');
//        Route::delete('customer/{id}', [\App\Http\Controllers\CustomerController::class, 'destroy'])->name('customer.destroy');
    });

    // Route staff
    Route::middleware('checkLoginStaff')->prefix('staff/')->group(function () {
        Route::get('staff', [\App\Http\Controllers\StaffController::class, 'index'])->name('staff.index');
        Route::get('add_staff', [\App\Http\Controllers\StaffController::class, 'create'])->name('staff.create');
        Route::post('add_staff', [\App\Http\Controllers\StaffController::class, 'store'])->name('staff.store');
        Route::get('edit_staff/{id}', [\App\Http\Controllers\StaffController::class, 'edit'])->name('staff.edit');
        Route::put('edit_staff/{id}', [\App\Http\Controllers\StaffController::class, 'update'])->name('staff.update');
        Route::delete('staff/{id}', [\App\Http\Controllers\StaffController::class, 'destroy'])->name('staff.destroy');
    });

    // Route order
    Route::middleware('checkLoginStaff')->prefix('order/')->group(function () {
        Route::get('order', [\App\Http\Controllers\OrderController::class, 'index'])->name('order.index');
        Route::get('edit_order/{id}', [\App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
        Route::put('edit_order/{id}', [\App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
    });

    // Route subcategory
    Route::middleware('checkLoginStaff')->prefix('subcategory/')->group(function () {
        Route::get('subcategory', [\App\Http\Controllers\SubcategoryController::class, 'index'])->name('subcategory.index');
        Route::get('add_subcategory', [\App\Http\Controllers\SubcategoryController::class, 'create'])->name('subcategory.create');
        Route::post('add_subcategory', [\App\Http\Controllers\SubcategoryController::class, 'store'])->name('subcategory.store');
        Route::get('edit_subcategory/{id}', [\App\Http\Controllers\SubcategoryController::class, 'edit'])->name('subcategory.edit');
        Route::put('edit_subcategory/{id}', [\App\Http\Controllers\SubcategoryController::class, 'update'])->name('subcategory.update');
        Route::delete('subcategory/{id}', [\App\Http\Controllers\SubcategoryController::class, 'destroy'])->name('subcategory.destroy');
    });

    // Route login
    Route::prefix('login/')->group(function () {
        Route::get('login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');
        Route::post('login', [\App\Http\Controllers\LoginController::class, 'loginProcess'])->name('loginProcess');
        Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    });

    // Route chart
    Route::middleware('checkLoginStaff')->prefix('chart/')->group(function () {
        Route::get('chart', [\App\Http\Controllers\ChartController::class, 'index'])->name('chart.index');
        Route::get('chartTotalPrice', [\App\Http\Controllers\ChartController::class, 'index2'])->name('chart.index2');
    });
});

Route::prefix('client/')->group(function () {
    // Route home
    Route::get('home', [\App\Http\Controllers\HomeLayoutController::class, 'index'])->name('client.home');

    // Route detail
    Route::get('detail/{id}', [\App\Http\Controllers\DetailLayoutController::class, 'index'])->name('client.detail');

    // Route category
    Route::get('category/{id}', [\App\Http\Controllers\CategoryLayoutController::class, 'index'])->name('client.category');
    Route::put('filter-category/{id}', [\App\Http\Controllers\CategoryLayoutController::class, 'filter'])->name('client.filterProductInCategory');

    // Route subcategory
    Route::get('subcategory/{id}', [\App\Http\Controllers\SubcategoryLayoutController::class, 'index'])->name('client.subcategory');
    Route::put('filter-subcategory/{id}', [\App\Http\Controllers\SubcategoryLayoutController::class, 'filter'])->name('client.filterProductInSubcategory');

    // Route search
    Route::put('search', [\App\Http\Controllers\SearchLayoutController::class, 'index'])->name('client.search');
    Route::put('filter-search/{keyword}', [\App\Http\Controllers\SearchLayoutController::class, 'filter'])->name('client.filterProductInSearch');

    Route::middleware('checkLoginCustomer')->group(function () {
        // Route cart
        Route::get('cart', [\App\Http\Controllers\CartLayoutController::class, 'index'])->name('client.cart');
        Route::put('add-to-cart/{id}', [\App\Http\Controllers\CartLayoutController::class, 'addToCart'])->name('client.addToCart');
        Route::put('update-cart', [\App\Http\Controllers\CartLayoutController::class, 'updateCart'])->name('client.updateCart');
        Route::get('delete-cart', [\App\Http\Controllers\CartLayoutController::class, 'deleteCart'])->name('client.deleteCart');
        Route::get('delete-product-in-cart/{id}', [\App\Http\Controllers\CartLayoutController::class, 'deleteProductInCart'])->name('client.deleteProductInCart');

        // Route checkout
        Route::get('checkout', [\App\Http\Controllers\CheckoutLayoutController::class, 'index'])->name('client.checkout');
        Route::post('checkout', [\App\Http\Controllers\CheckoutLayoutController::class, 'store'])->name('client.storeCheckout');

        // Route order
        Route::get('order', [\App\Http\Controllers\OrderLayoutController::class, 'index'])->name('client.order');
        Route::put('update-order/{id}', [\App\Http\Controllers\OrderLayoutController::class, 'update'])->name('client.updateOrder');
        Route::put('cancel-order/{id}', [\App\Http\Controllers\OrderLayoutController::class, 'cancel'])->name('client.cancelOrder');

        // Route profile
        Route::get('profile', [\App\Http\Controllers\ProfileLayoutController::class, 'index'])->name('client.profile');
        Route::put('profile/{id}', [\App\Http\Controllers\ProfileLayoutController::class, 'update'])->name('client.updateProfile');

        // Route change password
        Route::get('changePassword', [\App\Http\Controllers\ChangePasswordLayoutController::class, 'index'])->name('client.changePassword');
        Route::put('changePassword/{id}', [\App\Http\Controllers\ChangePasswordLayoutController::class, 'update'])->name('client.updatePassword');
    });

    // Route login
    Route::get('login', [\App\Http\Controllers\LoginController::class, 'login1'])->name('login1');
    Route::post('login', [\App\Http\Controllers\LoginController::class, 'loginProcess1'])->name('loginProcess1');
    Route::get('logout', [\App\Http\Controllers\LoginController::class, 'logout1'])->name('logout1');
    Route::get('register', [\App\Http\Controllers\LoginController::class, 'register'])->name('register');
    Route::post('register', [\App\Http\Controllers\LoginController::class, 'store'])->name('registerProcess');
});
