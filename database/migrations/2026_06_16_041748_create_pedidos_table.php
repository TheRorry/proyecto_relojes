<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('pedidos', function (Blueprint $table) {
        $table->id();
        // Conectamos con tu tabla 'usuarios'. Si borran al usuario, se activa la baja lógica
        $table->foreignId('usuario_id')->constrained('usuarios')->onDelete('cascade');
        $table->decimal('total', 10, 2); // Para guardar el monto total de la venta (ej: 150000.50)
        $table->string('estado')->default('completado'); // completado, pendiente, etc.
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
