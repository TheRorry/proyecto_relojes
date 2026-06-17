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
        $productos = Producto::where('activo', 1)->get();

        // 2. Retornamos la vista del catálogo pasándole la variable $productos
        return view('catalogo', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.productos.create');
    }

    public function store(Request $request)
{
    // 1. Validación
    $request->validate([
        'nombre' => 'required',
        'precio' => 'required',
        'stock' => 'required',
        'url_imagen' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
    ]);

    // 2. Preparamos los datos
    $datos = $request->except('url_imagen');

    if ($request->hasFile('url_imagen')) {
    $file = $request->file('url_imagen');
    
    // Verificamos si es válida
    if (!$file->isValid()) {
        dd('El archivo no es válido o está corrupto');
    }

    $nombreImagen = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('img/productos'), $nombreImagen);
    $datos['url_imagen'] = $nombreImagen;
} else {
    dd('El request no tiene ningún archivo llamado url_imagen');
}

    // 3. Procesamos la imagen
    if ($request->hasFile('url_imagen')) {
        $file = $request->file('url_imagen');
        $nombreImagen = time() . '_' . $file->getClientOriginalName();
        
        // Movemos el archivo
        $file->move(public_path('img/productos'), $nombreImagen);
        
        // Guardamos la ruta en el array de datos
        // NOTA: Asegurate que 'url_imagen' sea el nombre exacto de la columna en tu tabla productos
        $datos['url_imagen'] = $nombreImagen; 
    }

    // 4. ¡ESTO ES LO QUE TE FALTABA!
    // Guardamos en la base de datos
    Producto::create($datos);

    // 5. Redireccionamos con éxito
    return redirect()->route('admin.productos.index')->with('success', 'Reloj creado correctamente');
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
    public function destroy($id)
{
    // Buscamos el producto
    $producto = Producto::find($id);

    // En lugar de $producto->delete(), hacemos el update:
    $producto->update(['activo' => false]);

    return redirect()->route('admin.productos.index')->with('success', 'Producto dado de baja correctamente.');
}
}