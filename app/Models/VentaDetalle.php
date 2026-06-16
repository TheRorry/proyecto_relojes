<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaDetalle extends Model
{
    use HasFactory;

    // Le decimos a Laravel que la tabla en la base de datos se llama así
   protected $table = 'ventas_detail';

    // Permitimos la carga masiva de los campos que te pide la checklist
    protected $fillable = [
        'venta_id',
        'producto_id',
        'cantidad',
        'precio_unitario',
        'subtotal'
    ];

    /**
     * REQUISITO DEL PDF: Relación producto() definida correctamente
     * Cada renglón del detalle del carrito pertenece a un Reloj (Producto) específico
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
}