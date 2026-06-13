<?php

namespace App\Http\Controllers;

use App\Models\Usuario; // 1. CORREGIDO: Importamos tu modelo 'Usuario', no 'User'
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 

class AuthController extends Controller
{
    public function formularioRegistro()
    {
        return view('backend.usuarios.registro');
    }

    public function formularioLogin()
    {
        return view('backend.usuarios.login');
    }

    public function registrar(Request $request)
    {
        // Validación (Asegúrate de que coincida con los campos de tu formulario)
        $data = $request->validate([
            'nombre'   => 'required|string|max:255', // Cambiado a 'nombre' si así viene en tu formulario
            'email'    => 'required|string|email|max:255|unique:usuarios', // Apunta a tu tabla 'usuarios'
            'password' => 'required|string|min:8|confirmed',
        ]);

        // 2. CORREGIDO: Creamos usando 'Usuario' y mapeamos a tus columnas reales de la BD
        $user = Usuario::create([
            'nombre'   => $data['nombre'],
            'email'    => $data['email'],
            'password' => $data['password'], // Sin Hash::make() porque tu modelo ya lo hace solo en casts()
            'rol_id'   => 2, // 👈 CORREGIDO: La columna es 'rol_id', no 'role'
        ]);

        // Loguear al usuario automáticamente tras registrarse
        Auth::login($user);

        // Redireccionar a su sección
        return redirect('/cliente');
    }

    public function autenticar(Request $request)
    {
        $credenciales = $request->validate([
            'email'    => 'required|string|email',
            'password' => 'required|string',
        ]);

        // Intentar loguear
        if (Auth::attempt($credenciales)) {
            $request->session()->regenerate();

            // 3. PERFECTO: Aquí ya usas tu relación 'rol' y compruebas el nombre
            if (Auth::user()->rol && Auth::user()->rol->nombre === 'admin') {
                return redirect('/admin');
            } 
            
            return redirect('/cliente'); 
        }

        // Si la autenticación falla, regresa con error
        return back()->withErrors([ 'email' => 'Email o contraseña incorrectos' ]); 
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}