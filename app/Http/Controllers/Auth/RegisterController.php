<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que la vista sea la correcta
    }

    public function login(Request $request)
    {
        // Validar la entrada
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required', // Este campo no se usa para la autenticación.
        ]);

        // Intentar iniciar sesión
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Autenticación exitosa, redirige a la página deseada
            return redirect()->intended('home'); // Cambia 'home' por la ruta deseada
        }

        // Si falla, redirigir de nuevo con un mensaje
        return back()->withErrors([
            'credentials' => 'Las credenciales proporcionadas son incorrectas.',
        ])->withInput($request->only('email')); // Mantiene el email ingresado
    }
}
