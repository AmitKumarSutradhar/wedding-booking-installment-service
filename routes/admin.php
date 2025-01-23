<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;
use App\Http\Controllers\Admin\AdvertisementsController;
use App\Http\Controllers\Admin\BookingController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Admin\DiscountController;
use App\Http\Controllers\Admin\SellerController;

Route::group([], function (){
    Route::get('auth/login', [AdminAuthController::class, 'adminLogin'])->name('auth.login');
    Route::post('auth/login', [AdminAuthController::class, 'adminLoginSubmit'])->name('login.submit');


    Route::middleware('admin')->group(function (){
        Route::get('/dashboard', [AdminAuthController::class, 'adminDashboard'])->name('dashboard');
        Route::post('/auth/logout', [AdminAuthController::class, 'logout'])->name('auth.logout');

        //Admin Dashboard Discount Routes
        Route::prefix('booking')->name('booking.')->group(function (){
            Route::get('list/{status}', [BookingController::class, 'index'])->name('index');
        });

        //Admin Dashboard Discount Routes
        Route::prefix('discount')->name('discount.')->group(function (){
            Route::get('index', [DiscountController::class, 'index'])->name('index');
            Route::get('create', [DiscountController::class, 'create'])->name('create');
        });

        //Admin Dashboard Coupon Routes
        Route::prefix('coupon')->name('coupon.')->group(function (){
            Route::get('index', [CouponController::class, 'index'])->name('index');
            Route::get('create', [CouponController::class, 'create'])->name('create');
        });

        //Admin Dashboard Campaign Routes
        Route::prefix('campaign')->name('campaign.')->group(function (){
            Route::get('index', [CampaignController::class, 'index'])->name('index');
            Route::get('create', [CampaignController::class, 'create'])->name('create');
        });

        //Admin Dashboard Advertisements Routes
        Route::prefix('advertisements')->name('advertisements.')->group(function (){
            Route::get('index', [AdvertisementsController::class, 'index'])->name('index');
            Route::get('create', [AdvertisementsController::class, 'create'])->name('create');
        });

        //Admin Dashboard Seller Routes
        Route::prefix('seller')->name('seller.')->group(function (){
            Route::get('index', [SellerController::class, 'index'])->name('index');
            Route::get('create', [SellerController::class, 'create'])->name('create');
        });

        //Admin Dashboard customers Routes
        Route::prefix('customer')->name('customer.')->group(function (){
            Route::get('index', [CustomerController::class, 'index'])->name('index');
            Route::get('create', [CustomerController::class, 'create'])->name('create');
        });
    });
});
