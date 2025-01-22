<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminAuthController;

Route::group([], function (){
    Route::get('auth/login', [AdminAuthController::class, 'adminLogin'])->name('auth.login');
    Route::post('auth/login', [AdminAuthController::class, 'adminLoginSubmit'])->name('login.submit');


    Route::middleware('admin')->group(function (){
        Route::get('/dashboard', [AdminAuthController::class, 'adminDashboard'])->name('dashboard');
        Route::post('/auth/logout', [AdminAuthController::class, 'logout'])->name('auth.logout');
    });
});
