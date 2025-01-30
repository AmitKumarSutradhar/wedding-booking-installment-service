<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\AdvertisementsController;
use App\Http\Controllers\Seller\SellerAuthController;
use App\Http\Controllers\Seller\BookingController;

Route::group([], function (){
    Route::middleware(['guest:seller'])->group( function (){
        Route::get('auth/login', [SellerAuthController::class, 'login'])->name('auth.login');
        Route::post('auth/login', [SellerAuthController::class, 'loginPost'])->name('login.submit');
    });



    Route::group(['middleware' => 'auth:seller'], function (){
        Route::get('/dashboard', [SellerAuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/auth/logout', [SellerAuthController::class, 'logout'])->name('auth.logout');

        //Admin Dashboard Booking Related Routes
        Route::prefix('booking')->name('booking.')->group(function (){
            Route::get('list/{status}', [BookingController::class, 'index'])->name('index');
        });

        //Seller Dashboard Advertisements Routes
        Route::prefix('advertisements')->name('advertisements.')->group(function (){
            Route::get('index', [AdvertisementsController::class, 'index'])->name('index');
            Route::get('create', [AdvertisementsController::class, 'create'])->name('create');
        });
    });
});
