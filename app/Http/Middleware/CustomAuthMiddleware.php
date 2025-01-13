<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomAuthMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('login');  // Redirige vers la page de connexion si l'utilisateur n'est pas connecté
        }

        return $next($request);
    }
}
