<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    use HasFactory;

    // Le indicamos el nombre de tu tabla en español
    protected $table = 'mensajes'; 

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
        'read', // Booleano para saber si el Admin ya revisó la consulta
    ];

    protected $casts = [
        'read' => 'boolean',
    ];
}