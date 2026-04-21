<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function procesar(Request $request) 
{ 
    // Capturamos lo que el usuario escribió
    $nombre = $request->input('nombre');
    $email = $request->input('email');

    // IMPORTANTE: Pasamos los datos a la vista éxito
    return view('exito', compact('nombre', 'email')); 
}

    public function consultas()
    {
        return view('consultas');
    }
}
