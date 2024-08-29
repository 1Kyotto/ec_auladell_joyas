<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuariosController
{
    function index() 
    {
        return view('usuarios.index');
    }

    function registrarse() 
    {
        return view('usuarios.registrarse');
    }

    function restaurarContrasena() 
    {
        return view('usuarios.contrasena');
    }

    function contrasena() 
    {
        return 0;
    }

}
