<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RolMiddleware
{
    /**
     * Manejar una solicitud entrante.
     */
    public function handle(Request $request, Closure $next, string $rol): Response
    {
        // 1. Verificar si el usuario inició sesión
        if (!auth()->check()) {
            return redirect('/login');
        }

        // 2. Verificar si el rol del usuario coincide con el requerido (ej: 'admin')
        if (auth()->user()->rol && auth()->user()->rol->nombre === $rol) {
            return $next($request); // Lo deja pasar al panel
        }

        // Si está logueado pero NO es admin, lo manda a la principal
        return redirect('/')->with('error', 'No tienes permisos para acceder a esta sección.');
    }
}