<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role', // <-- Clave para diferenciar 'cliente' de 'admin'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Helper para saber si el usuario es Administrador
     */
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    /**
     * Relación con el Carrito Activo (Muchos a Muchos con Product)
     * Apunta a tu tabla intermedia 'carritos'
     */
    public function cartProducts()
    {
        return $this->belongsToMany(Product::class, 'carritos', 'user_id', 'product_id')
                    ->withPivot('quantity')
                    ->withTimestamps();
    }

    /**
     * Relación con las Órdenes de Compra realizadas por el cliente
     */
    public function orders()
    {
        return $this->hasMany(Order::class, 'user_id');
    }
}