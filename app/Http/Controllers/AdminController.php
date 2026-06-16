<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Producto;
use App\Models\VentaCabecera;
use App\Models\Contacto; // Asegúrate de importar el modelo
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        // 1. Estadísticas generales
        $totalUsuarios = Usuario::count();
        $totalProductos = Producto::count();
        $totalPedidos = VentaCabecera::where('estado', 'comprado')->count();
        $totalConsultas = Contacto::count();

        // 2. Datos para tablas
        $usuariosRecientes = Usuario::latest()->take(5)->get();
        $ventasRecientes = VentaCabecera::with('usuario')->latest()->take(5)->get();
        
        // Esta es la variable que causaba el error
        $totalConsultas = Contacto::count();
    
        // AQUÍ ESTÁ LA CLAVE: Debes definir la variable que usas en la vista
        $consultasRecientes = Contacto::latest()->take(5)->get();

        return view('backend.admin.dashboard', compact(
        'totalUsuarios', 
        'totalProductos', 
        'totalPedidos', 
        'totalConsultas', 
        'usuariosRecientes', 
        'consultasRecientes', // Asegúrate de incluirla aquí
        'ventasRecientes'
        ));
    }
}