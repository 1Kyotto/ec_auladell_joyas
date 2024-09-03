<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Autenticacion
{
    public function showLoginForm()
    {
        return view('usuarios.index');
    }

    public function login(Request $request)
    {
        // Validar los datos de inicio de sesión
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'contraseña' => ['required'],
        ]);

        // Intentar iniciar sesión con la opción "Recordarme"
        if (Auth::attempt($credentials, $request->remember)) {
            // Redirigir al usuario a la página principal
            return redirect()->intended('dashboard');
        }

        // Redirigir de vuelta con un error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
