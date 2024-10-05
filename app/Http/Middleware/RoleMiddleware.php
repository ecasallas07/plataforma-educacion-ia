<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next,$role): Response
    {

        if(!auth()->check())
        {
            abort(403,'No tienes autorización para acceder a esta página.');
        }

        $userRole = auth()->user()->role;

        if($userRole !== $role)
        {
            abort(403,'No tienes los permisos necesarios.');
        }
        return $next($request);
    }
}
