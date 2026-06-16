<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up(): void
{

    Schema::create('ventas_detail', function (Blueprint $table) {
        $table->id();
        // FK conectada a la cabecera de la venta
        $table->foreignId('venta_id')->constrained('ventas_cabecera')->onDelete('cascade');
        // FK conectada a tus productos (relojes)
        $table->foreignId('producto_id')->constrained('productos')->onDelete('cascade');
        $table->integer('cantidad');
        $table->decimal('precio_unitario', 12, 2);
        $table->decimal('subtotal', 12, 2);
        $table->timestamps();
    });
    
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ventas_detail');
    }
};
