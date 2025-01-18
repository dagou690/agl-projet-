<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        // Liste des middlewares globaux
    ];

    protected $middlewareGroups = [
        'web' => [
            // Middlewares pour les routes Web
        ],

        'api' => [
            // Middlewares pour les routes API
        ],
    ];

    protected $routeMiddleware = [
       
            'custom-auth' => \App\Http\Middleware\CustomAuthMiddleware::class,
            // autres middlewares
      
        
        // ...
        'admin' => \App\Http\Middleware\AdminMiddleware::class,
    ];
    
}
