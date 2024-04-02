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
        Schema::create('articulo', function (Blueprint $table) {
            $table->bigIncrements('idMueble');
            $table->string('nombre'); // Cambio de 'descripcion' a 'nombre'
            $table->string('color'); // Agregando la columna 'color'
            $table->float('precio');
            $table->string('dimensiones'); // Agregando la columna 'dimensiones'
            $table->string('material'); // Agregando la columna 'material'
            $table->integer('stock');
            $table->text('descripcion'); // Cambio de 'stock' a 'descripcion'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulo');
    }
};
