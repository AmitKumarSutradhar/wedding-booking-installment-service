<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function() {
           Route::middleware('web')
               ->prefix('admin')
               ->name('admin.')
               ->group(base_path('routes/admin.php'));
           Route::middleware('web')
               ->prefix('seller')
               ->name('seller.')
               ->group(base_path('routes/seller.php'));
        }
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'guest' => \App\Http\Middleware\RedirectIfAuthenticated::class,
            'admin' => \App\Http\Middleware\AdminMiddleware::class,
            'seller' => \App\Http\Middleware\SellerAuthMiddleware::class,
        ]);

        $middleware->redirectGuestsTo(function ($request) {
            if (!$request->expectsJson()) {
                if (in_array('auth:admin', $request->route()->middleware())) {
                    if (!auth('admin')->check()) {
                        return route('admin.auth.login');
                    }
                }//admin auth

                if (in_array('auth:seller', $request->route()->middleware())) {
                    if (!auth('seller')->check()) {
                        return route('seller.auth.login');
                    }
                }//seller auth

                if (in_array('auth:seller', $request->route()->middleware())) {
                    if (!auth('seller')->check()) {
                        return route('seller.auth.login');
                    }
                }//seller auth
            }
        });
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
