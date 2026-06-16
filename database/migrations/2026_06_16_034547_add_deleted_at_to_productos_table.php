<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Route::table('productos', function (Blueprint $table) {
        $table->softDeletes(); // 👈 Esto crea la columna 'deleted_at' automáticamente
    });
}

public function down()
{
    Route::table('productos', function (Blueprint $table) {
        $table->dropSoftDeletes();
    });
}
};
