<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\Admin\ProductoController as AdminProductoController;

// --------------------------------------------------------------------------
// 🌍 VISTAS PÚBLICAS GENERALES
// --------------------------------------------------------------------------
Route::get('/', function () {
    return view('principal');
});

// 🔥 CORRECCIÓN: Dejamos SOLO la ruta dinámica del catálogo conectada al ProductoController
Route::get('/catalogo', [ProductoController::class, 'index'])->name('catalogo.index');

Route::get('/comercializacion', function () { 
    return view('comercializacion'); 
});

Route::get('/quienes-somos', function () { 
    return view('quienes_somos'); 
}); 

Route::get('/terminos-y-usos', function () { 
    return view('terminos_y_usos'); 
});

Route::get('/informacion', function () { 
    return view('informacion'); 
}); 

Route::get('/exito', function () {
    return view('exito');
});

// --------------------------------------------------------------------------
// ✉️ SECCIÓN DE CONTACTO / CONSULTAS
// --------------------------------------------------------------------------
Route::get('/consultas', [ContactoController::class, 'consultas'])->name('consultas'); 
Route::post('/consultas', [ContactoController::class, 'procesar'])->name('consultas.enviar'); 
Route::post('/informacion', [ContactoController::class, 'procesar']);

// --------------------------------------------------------------------------
// 🔐 AUTENTICACIÓN (LOGIN Y REGISTRO)
// --------------------------------------------------------------------------
Route::get('/registro', [AuthController::class, 'formularioRegistro']); 
Route::post('/registro', [AuthController::class, 'registrar']);

Route::get('/login', [AuthController::class, 'formularioLogin'])->name('login');
Route::post('/login', [AuthController::class, 'autenticar']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// --------------------------------------------------------------------------
// 👤 ZONA PROTEGIDA: CLIENTES AUTENTICADOS (Requisito Checklist)
// --------------------------------------------------------------------------
Route::middleware(['auth'])->group(function () {
    
    // Dashboard base del cliente
    Route::get('/cliente', function () {
        return view('backend.usuarios.cliente');
    });
    
    // 🛒 RUTAS DEL CARRITO DE COMPRAS (Mapeado exacto según tu PDF de flujo)
    Route::get('/carrito', [CarritoController::class, 'index'])->name('carrito.index'); 
    Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregar'])->name('carrito.agregar');
    Route::delete('/carrito/eliminar/{id}', [CarritoController::class, 'eliminar'])->name('carrito.eliminar');
    Route::post('/carrito/confirmar', [CarritoController::class, 'confirmar'])->name('carrito.confirmar');
    Route::get('/compra-confirmada', [CarritoController::class, 'compraConfirmada'])->name('carrito.confirmada');
});

// --------------------------------------------------------------------------
// 👑 ZONA PROTEGIDA: ADMINISTRADORES
// --------------------------------------------------------------------------
Route::middleware(['auth', 'rol:admin'])->group(function () {
    
    Route::get('/admin', [AdminController::class, 'dashboard']);
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
    
    // CRUD de productos para el administrador
    Route::resource('admin/productos', AdminProductoController::class);
});