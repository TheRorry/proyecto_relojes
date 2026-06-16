<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VentaCabecera extends Model
{
    use HasFactory;

    protected $table = 'ventas_cabecera';

    protected $fillable = [
        'user_id',
        'estado',
        'total',
        'fecha_venta'
    ];

    // Requisito del PDF: castear la fecha como datetime
    protected $casts = [
        'fecha_venta' => 'datetime',
    ];

    /**
     * REQUISITO DEL PDF: Relación detalles() definida correctamente
     * Una cabecera de carrito contiene muchos productos en su detalle
     */
    public function detalles()
    {
        return $this->hasMany(VentaDetalle::class, 'venta_id');
    }
    public function usuario()
{
    // Usamos 'user_id' porque vimos en DBeaver que así se llama tu columna
    return $this->belongsTo(Usuario::class, 'user_id');
}
}