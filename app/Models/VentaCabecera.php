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

    protected $casts = [
        'fecha_venta' => 'datetime',
    ];

    
    public function detalles()
    {
        return $this->hasMany(VentaDetalle::class, 'venta_id');
    }
    public function usuario()
{
    
    return $this->belongsTo(Usuario::class, 'user_id');
}
}