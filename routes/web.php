<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/seller/auth/login', [WebsiteController::class, 'sellerLogin'])->name('seller.login');
Route::get('/seller/auth/register', [WebsiteController::class, 'sellerRegister'])->name('seller.register');

Route::get('/dashboard', function () {
    return view('admin-views.dashboard.index');
})->middleware(['guest', 'auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
//require __DIR__.'/admin.php';
//require __DIR__.'/seller.php';
