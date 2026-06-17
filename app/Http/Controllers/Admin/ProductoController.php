<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\models\Producto;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Traemos todos los productos de la base de datos
        $productos = Producto::all(); 

        // Retornamos la vista que vas a tener en backend/admin/productos/index
        return view('backend.admin.index', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // 1. Validamos todo, incluyendo la imagen
    $data = $request->validate([
        'nombre'      => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'precio'      => 'required|numeric|min:0',
        'stock'       => 'required|integer|min:0',
        'url_imagen'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048'
    ]);

    // 2. Procesamos la imagen si viene en el request
    if ($request->hasFile('url_imagen')) {
        $imagen = $request->file('url_imagen');
        $nombreImagen = time() . '_' . $imagen->getClientOriginalName();
        $imagen->move(public_path('img/productos'), $nombreImagen);
        
        // Agregamos el nombre del archivo al array de datos
        $data['url_imagen'] = $nombreImagen;
    }

    // 3. Creamos el registro incluyendo la url_imagen
    Producto::create($data);

    return redirect('admin/productos')->with('success', 'Reloj agregado exitosamente.');
}

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::findOrFail($id); 
    
        return view('backend.admin.edit', compact('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producto = Producto::findOrFail($id);

    // Validamos los datos entrantes
    $data = $request->validate([
        'nombre'      => 'required|string|max:255',
        'descripcion' => 'nullable|string',
        'precio'      => 'required|numeric|min:0',
        'stock'       => 'required|integer|min:0',
    ]);

    // Actualizamos el registro
    $producto->update($data);

    return redirect('admin/productos')->with('success', 'Reloj actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $producto = Producto::findOrFail($id);
        $producto->delete();

        return redirect('admin/productos')->with('success', 'El reloj ha sido removido del catálogo.');
    }
}
