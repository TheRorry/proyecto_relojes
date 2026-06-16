<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use App\Models\Producto;
use App\Models\VentaCabecera;
use App\Models\VentaDetalle; // Asegurate de tener este modelo
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalUsuarios = Usuario::count();
        $totalProductos = Producto::count();
        $totalPedidos = VentaCabecera::where('estado', 'comprado')->count();
        $totalConsultas = 0;

        // Consultas necesarias para las tablas de la vista
        $usuariosRecientes = Usuario::latest()->take(5)->get();
        $consultasRecientes = collect(); // Vacío para que no rompa
       $ventasRecientes = VentaCabecera::with('usuario')->latest()->take(5)->get();

        return view('backend.admin.dashboard', compact(
            'totalUsuarios', 
            'totalProductos', 
            'totalPedidos', 
            'totalConsultas', 
            'usuariosRecientes', 
            'consultasRecientes',
            'ventasRecientes'
        ));
    }
}