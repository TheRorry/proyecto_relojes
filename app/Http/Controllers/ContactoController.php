<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{

    public function procesar(Request $request) 
    { 
    $nombre = $request->input('nombre');
    $email = $request->input('email');
    $mensaje = $request->input('mensaje');
    
    // Si no viene 'asunto' (porque se envió desde Información), le ponemos uno genérico
    $asunto = $request->input('asunto', 'Consulta General');

    return view('exito', compact('nombre', 'email', 'asunto', 'mensaje')); 
    }

    public function consultas()
    {
        return view('consultas');
    }
}
