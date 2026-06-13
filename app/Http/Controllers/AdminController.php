<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Usuario;
use App\models\Producto;

class AdminController extends Controller
{
   public function dashboard()
    {
        // 1. Contamos los registros reales de la base de datos
        $totalUsuarios = Usuario::count();
        $totalProductos = Producto::count(); 
        $totalPedidos = 0; // Si no tenés tabla pedidos aún, lo dejamos en 0 por ahora

        // 2. Traemos los últimos usuarios registrados con su rol vinculado
        // Usamos 'with' para que no haga consultas de más (Eager Loading)
        $usuariosRecientes = Usuario::with('rol')
                                    ->orderBy('id', 'desc')
                                    ->take(5) // Trae solo los últimos 5
                                    ->get();

        // 3. Le pasamos todos estos datos vivos a la vista mediante compact()
        return view('backend.admin.dashboard', compact(
            'totalUsuarios', 
            'totalProductos', 
            'totalPedidos', 
            'usuariosRecientes'
        ));
    }
}
