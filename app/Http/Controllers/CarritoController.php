<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\VentaCabecera;
use App\Models\VentaDetalle;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    /**
     * PASO 2: obtenerCarrito() usa firstOrCreate con estado='carrito'
     */
    private function obtenerCarrito()
    {
        return VentaCabecera::firstOrCreate(
            [
                'user_id' => Auth::id(),
                'estado' => 'carrito' // Al confirmar pasa a 'confirmado', liberando este firstOrCreate
            ],
            [
                'total' => 0,
                'fecha_venta' => null
            ]
        );
    }

    /**
     * PASO 2: POST → agregar()
     */
    public function agregar(Request $request, $id)
    {
        $producto = Producto::findOrFail($id);
        $carritoCabecera = $this->obtenerCarrito();

        $detalle = VentaDetalle::where('venta_id', $carritoCabecera->id)
            ->where('producto_id', $producto->id)
            ->first();

        $cantidadFutura = $detalle ? $detalle->cantidad + 1 : 1;

        if ($producto->stock < $cantidadFutura) {
            return redirect()->back()->with('error', 'No hay suficiente stock.');
        }

        if ($detalle) {
            $detalle->cantidad = $cantidadFutura;
            $detalle->subtotal = $detalle->cantidad * $detalle->precio_unitario;
            $detalle->save();
        } else {
            VentaDetalle::create([
                'venta_id' => $carritoCabecera->id,
                'producto_id' => $producto->id,
                'cantidad' => 1,
                'precio_unitario' => $producto->precio,
                'subtotal' => $producto->precio
            ]);
        }

        $this->recalcularTotal($carritoCabecera);

        return redirect()->back()->with('success', '¡Pieza añadida al carrito!');
    }

    /**
     * PASO 3: GET → index() → Muestra el carrito con cantidades y subtotales
     */
    public function index()
    {
        $carrito = VentaCabecera::where('user_id', Auth::id())
            ->where('estado', 'carrito')
            ->with('detalles.producto') 
            ->first();

        return view('carrito', compact('carrito'));
    }

    /**
     * PASO 4: DELETE → eliminar() → Borra el ítem y recalcula el total
     */
    public function eliminar($id)
    {
        $carritoCabecera = $this->obtenerCarrito();
        
        VentaDetalle::where('venta_id', $carritoCabecera->id)
            ->where('id', $id)
            ->delete();

        $this->recalcularTotal($carritoCabecera);

        return redirect()->back()->with('success', 'Producto eliminado.');
    }

    /**
     * PASO 5: POST → confirmar() → estado='confirmado', fecha_venta=now() y redirige
     */
    public function confirmar()
    {
        $carritoCabecera = $this->obtenerCarrito();

        if ($carritoCabecera->detalles->isEmpty()) {
            return redirect()->back()->with('error', 'El carrito está vacío.');
        }

        // Descontamos stock
        foreach ($carritoCabecera->detalles as $detalle) {
            $producto = $detalle->producto;
            $producto->stock -= $detalle->cantidad;
            $producto->save();
        }

        // Guardamos los cambios con estado 'confirmado'
        $carritoCabecera->update([
            'estado' => 'confirmado',
            'fecha_venta' => now()
        ]);

        // Guardamos el ID de la venta en la sesión para el paso 6 antes de perderlo
        session()->put('ultima_venta_id', $carritoCabecera->id);

        return redirect()->route('carrito.confirmada');
    }

    /**
     * PASO 6: Vista compra-confirmada muestra los ítems desde la sesión
     */
    public function compraConfirmada()
    {
        $ventaId = session()->get('ultima_venta_id');

        if (!$ventaId) {
            return redirect()->route('catalogo.index');
        }

        $venta = VentaCabecera::with('detalles.producto')->findOrFail($ventaId);

        return view('compra-confirmada', compact('venta'));
    }

    private function recalcularTotal(VentaCabecera $carritoCabecera)
    {
        $nuevoTotal = VentaDetalle::where('venta_id', $carritoCabecera->id)->sum('subtotal');
        $carritoCabecera->update(['total' => $nuevoTotal]);
    }
}