<?php

namespace App\Http\Controllers;

use App\Models\Producto; // <-- Tu modelo real en español
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Vista pública: Catálogo de productos para Visitantes y Clientes.
     * (Productos Visualizados de manera dinámica)
     */
    
       public function index()
    {
        $productos = Producto::all(); 
        
        // Ponemos la P mayúscula para que coincida con tu carpeta real
        return view('Productos.index', compact('productos'));
    }
    

    /**
     * Vista privada (Admin): Panel de gestión de productos (CRUD).
     */
    public function adminIndex()
    {
        // Con withTrashed() el admin ve también los dados de baja lógicamente
        $productos = Producto::withTrashed()->get();
        
        return view('admin.productos.index', compact('productos'));
    }

    /**
     * Formulario de Alta (Admin)
     */
    public function create()
    {
        return view('admin.productos.create');
    }

    /**
     * Guardar el nuevo producto con Formulario Validado (Admin)
     */
    public function store(Request $request)
    {
        $request->validate([
            'marca'       => 'required|string|max:255',
            'modelo'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'url_imagen'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048', 
        ]);

        $data = $request->all();

        if ($request->hasFile('url_imagen')) {
            // Guardamos las imágenes en la carpeta pública de productos en español
            $path = $request->file('url_imagen')->store('productos', 'public');
            $data['url_imagen'] = $path;
        }

        Producto::create($data);

        return redirect()->route('admin.productos.index')->with('success', 'Reloj agregado exitosamente.');
    }

    /**
     * Formulario de Modificación (Admin)
     */
    public function edit($id)
    {
        $producto = Producto::findOrFail($id);
        return view('admin.productos.edit', compact('producto'));
    }

    /**
     * Actualizar el producto (Admin)
     */
    public function update(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);

        $request->validate([
            'marca'       => 'required|string|max:255',
            'modelo'      => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'precio'      => 'required|numeric|min:0',
            'stock'       => 'required|integer|min:0',
            'url_imagen'  => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('url_imagen')) {
            $path = $request->file('url_imagen')->store('productos', 'public');
            $data['url_imagen'] = $path;
        }

        $producto->update($data);

        return redirect()->route('admin.productos.index')->with('success', 'Reloj actualizado exitosamente.');
    }

    /**
     * BAJA LÓGICA (Admin)
     */
    public function destroy($id)
    {
        $producto = Producto::findOrFail($id);
        
        // SoftDelete: llena la columna 'deleted_at' sin borrar físicamente
        $producto->delete(); 

        return redirect()->route('admin.productos.index')->with('success', 'El producto ha sido dado de baja correctamente.');
    }

    /**
     * Alta de un producto dado de baja lógicamente (Restaurar)
     */
    public function restore($id)
    {
        $producto = Producto::withTrashed()->findOrFail($id);
        $producto->restore(); 

        return redirect()->route('admin.productos.index')->with('success', 'El producto vuelve a estar activo.');
    }
}