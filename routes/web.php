<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {
    return view('principal');
});

Route::get('/catalogo', function () { 
return view('catalogo'); 
}); 

Route::get('/comercializacion', function () { 
return view('comercializacion'); 
});

// Muestra el formulario
Route::get('/consultas', [ContactoController::class, 'consultas'])->name('consultas'); 

// Procesa el formulario (Cambiamos /informacion por /consultas)
Route::post('/consultas', [ContactoController::class, 'procesar'])->name('consultas.enviar'); 

Route::get('/informacion', function () { 
return view('informacion'); 
}); 
Route::post('/informacion', [ContactoController::class, 'procesar']);

Route::get('/exito', function () {
return view('exito');
});

Route::get('/quienes-somos', function () { 
return view('quienes_somos'); 
}); 

Route::get('/terminos-y-usos', function () { 
return view('terminos_y_usos'); 
});

Route::get('/registro', [AuthController::class, 'formularioRegistro']);

Route::get('/login', [AuthController::class, 'formularioLogin']); 
Route::post('/login', [AuthController::class, 'autenticar']);

Route::middleware(['auth','rol:admin'])->group(function(){
    Route::get('/admin', [AdminController::class, 'dashboard']);
});
