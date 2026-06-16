<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Muestra el catálogo de relojes a los usuarios.
     */
    public function index()
    {
        // 1. Traemos todos los productos (relojes) de la base de datos
        $productos = Producto::all(); 

        // 2. Retornamos la vista del catálogo pasándole la variable $productos
        // (Asegurate de que tu archivo blade se llame 'catalogo.blade.php' o cambialo acá)
        return view('catalogo', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Acá vas a retornar la vista de tu formulario de administración más adelante
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Acá irá tu lógica para guardar los relojes nuevos y mover las fotos a img/productos
    }

    /**
     * Display the specified resource.
     */
    public function show(Producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Producto $producto)
    {
        //
    }
}