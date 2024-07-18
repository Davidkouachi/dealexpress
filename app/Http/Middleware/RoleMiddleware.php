<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleMiddleware
{
    public function handle($request, Closure $next, $role)
    {
        // Vérifier si l'utilisateur est authentifié
        if (!Auth::check()) {
            return redirect()->route('index_accueil')->with('error', 'Vous devez être connecté pour accéder à cette page.');
        }

        // Vérifier le rôle de l'utilisateur
        if (Auth::user()->role !== $role) {
            return redirect()->route('index_accueil')->with('error', 'Vous n\'avez pas les permissions nécessaires pour accéder à cette page.');
        }

        return $next($request);
    }
}

