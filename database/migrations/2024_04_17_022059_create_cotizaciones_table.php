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
        Schema::create('cotizaciones', function (Blueprint $table) {
            $table->id();
            $table->string('nombreCliente');
            $table->string('paterno');
            $table->string('materno');
            $table->string('correo');
            $table->string('telefono');
            $table->string('categoriaMueble');
            $table->float('altoMueble');
            $table->float('anchoMueble');
            $table->float('largoMueble');
            $table->string('materialMueble');
            $table->string('colorMueble');
            $table->string('descripcionMueble');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizaciones');
    }
};
