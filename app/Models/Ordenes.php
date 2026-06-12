<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{
    use HasFactory;

    // Si tu tabla en la migración se llama 'ordenes', se lo aclaramos acá:
    protected $table = 'ordenes'; 

    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];

    /**
     * Saber qué cliente hizo esta compra
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Detalle de la compra: Qué productos se compraron en esta orden.
     * Apunta a tu tabla intermedia 'order_product' (o como hayas llamado al detalle)
     */
    public function products()
    {
        return $this->belongsToMany(Product::class, 'order_product', 'order_id', 'product_id')
                    ->withPivot('quantity', 'price_at_purchase')
                    ->withTimestamps();
    }
}