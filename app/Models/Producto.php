<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // <-- 1. IMPORTANTE: Faltaba esta importación arriba

class Producto extends Model
{
    use SoftDeletes; // <-- 2. CORRECCIÓN: El "use" del trait va ACÁ adentro

    // Ajustamos el fillable a los nombres en español que estás usando
    protected $fillable = [
        'marca',        // Ej: Rolex
        'modelo',       // Ej: Submariner
        'descripcion',
        'precio',
        'stock',
        'url_imagen',   // Ruta de la foto
    ];

    protected $casts = [
        'precio' => 'decimal:2',
        'stock' => 'integer',
    ];

    /**
     * Relación con los usuarios que tienen este producto en su carrito.
     * Esto les va a permitir saber qué clientes quieren comprar este reloj.
     */
    public function usuariosEnCarrito()
    {
        return $this->belongsToMany(User::class, 'carts', 'product_id', 'user_id')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }
}