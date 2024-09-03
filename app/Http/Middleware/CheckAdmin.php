<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        //Verificar si el usuario está autenticado
        if(!Auth::check())
        {
            return redirect()->route('usuarios.index'); //Redirigir al login si no está autenticado
        }

        //Verificar si el usuario es administrador
        $usuario = Auth::user();
        if($usuario->rol !== 'A')
        {
            //Si no es administrador, redirigir a /home o mostrar un error
            return redirect()->route('home.index')->with('error', 'Acceso denegado. No tienes permiso para acceder a esta página.');
        }
        return $next($request);
    }
}
