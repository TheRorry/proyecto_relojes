<?php

namespace Database\Seeders;

use App\Models\Usuario; // Asegurado el modelo correcto
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Cargamos primero los roles para que existan en la base
        $this->call([ RolesSeeder::class ]);

        // 2. Creamos TU usuario administrador real
        // Usamos create() en lugar de factory() porque factory 
        // a veces intenta insertar campos que no tienes.
        Usuario::create([
            'nombre'   => 'Rodrigo', 
            'email'    => 'rodri@gmail.com',
            'password' => Hash::make('12345678'),
            'rol_id'   => 2, // 2 es el ID de 'admin' que definiste en RolesSeeder
        ]);
    }
}