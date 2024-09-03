<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Contacto;
use App\Models\Usuario;

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

    function autenticar(Request $request)
    {
        $credenciales = $request->only(['email','password']);

        $contacto = Contacto::where('email', $credenciales['email'])->first();

        $usuario = Usuario::where('id_contacto', $contacto->id_contacto)->first();

        if (!$usuario) {
            return back()->withErrors(['usuario' => 'Usuario no encontrado para el contacto dado.']);
        }

        if (!Hash::check($credenciales['password'], $usuario->password)) {
            return back()->withErrors(['password' => 'Contraseña incorrecta.']);
        }

        Auth::login($usuario);

        $request->session()->regenerate();

        if($usuario->rol == 'A')
        {
            return redirect()->route('dashboard.index');
        }
        else
        {
            return redirect()->route('home.index');
        }

        return back()->withErrors('Email o Contraseña incorrectas.')->onlyInput('email');
    }
}
