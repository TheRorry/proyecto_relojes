<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{
    public function procesar(Request $request) 
    { 
        // 1. Validamos los datos
        $request->validate([
            'nombre'  => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'mensaje' => 'required|string',
        ]);

        // 2. Guardamos en la base de datos
        Contacto::create([
            'nombre'  => $request->input('nombre'),
            'email'   => $request->input('email'),
            'asunto'  => $request->input('asunto', 'Consulta General'),
            'mensaje' => $request->input('mensaje'),
            'leido'   => false,
        ]);

        // 3. Retornamos la vista de éxito
        return view('exito', [
            'nombre'  => $request->nombre,
            'email'   => $request->email,
            'asunto'  => $request->input('asunto', 'Consulta General'),
            'mensaje' => $request->mensaje
        ]); 
    }

    public function consultas()
    {
        return view('consultas');
    }
}