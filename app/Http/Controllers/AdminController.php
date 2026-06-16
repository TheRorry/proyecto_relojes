<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Usuario;
use App\models\Producto;
use App\models\Contacto;

class AdminController extends Controller
{
    public function dashboard()
    {
        // 1. Contadores en tiempo real para las tarjetas informativas
        $totalUsuarios = Usuario::count();
        $totalProductos = Producto::count(); 
        $totalPedidos = 0; // Se queda en 0 fijo por ahora hasta armar el módulo de ventas
        
        // 🔹 CONTROL DE CONSULTAS:
        $totalConsultas = 0; // 👈 Línea temporal (Borrala cuando crees la tabla)
        // $totalConsultas = Contacto::count(); // 👈 Descomentá esta cuando la tabla exista


        // 2. Trae los últimos 5 usuarios registrados junto con su rol asignado
        $usuariosRecientes = Usuario::with('rol')
                                    ->orderBy('id', 'desc')
                                    ->take(5)
                                    ->get();


        // 3. Trae los últimos 5 mensajes que dejaron los clientes en la web
        // 🔹 CONTROL DE BANDEJA DE ENTRADA:
        $consultasRecientes = collect(); // 👈 Línea temporal (Borrala cuando crees la tabla)
        // $consultasRecientes = Contacto::orderBy('id', 'desc')->take(5)->get(); // 👈 Descomentá esta cuando la tabla exista


        // 4. Envía de forma segura el paquete de datos hacia la vista de Blade
        return view('backend.admin.dashboard', compact(
            'totalUsuarios', 
            'totalProductos', 
            'totalPedidos', 
            'totalConsultas',
            'usuariosRecientes',
            'consultasRecientes'
        ));
    }
}