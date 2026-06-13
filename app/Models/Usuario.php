<?php

namespace App\Models;

// 1. CORRECCIÓN: Importar la clase Authenticatable correcta para el Login
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Usuario extends Authenticatable {
    use HasFactory, Notifiable, SoftDeletes;

    protected $table = 'usuarios';
    
    protected $fillable = ['nombre', 'email', 'password', 'rol_id'];
    
    protected $hidden = ['password', 'remember_token']; 

    protected function casts(): array {
        return [
            'password' => 'hashed', // Hashea automáticamente al asignar 🎉
        ];
    } // 2. CORRECCIÓN: Falta esta llave de cierre del método casts

    // Relación: un Usuario pertenece a un Rol → se usa como $usuario->rol
    public function rol() {
        return $this->belongsTo(Rol::class, 'rol_id');
    }
}