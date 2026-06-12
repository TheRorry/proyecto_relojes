<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    // Le aclaramos a Laravel el nombre exacto de tu tabla en español
    protected $table = 'carritos'; 

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
    ];

    // Relación inversa: A qué usuario le pertenece este registro del carrito
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relación inversa: Qué producto está metido en este carrito
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}