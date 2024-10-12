<?php

use App\Http\Middleware\AdminAuth;
use App\Http\Middleware\OwnerAuth;
use App\Http\Middleware\UserAuth;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->appendToGroup('admin', [
            AdminAuth::class,
        ]);
        $middleware->appendToGroup('owner',[
            OwnerAuth::class,
        ]);
        $middleware->appendToGroup('user',[
            UserAuth::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
