<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Seller\SellerAuthController;

Route::group([], function (){
    Route::get('auth/login', [SellerAuthController::class, 'login'])->name('auth.login');
    Route::post('auth/login', [SellerAuthController::class, 'loginPost'])->name('login.submit');

    Route::middleware(['seller'])->group( function (){
        Route::get('/dashboard', [SellerAuthController::class, 'dashboard'])->name('dashboard');
        Route::post('/auth/logout', [SellerAuthController::class, 'logout'])->name('auth.logout');
    });
});
