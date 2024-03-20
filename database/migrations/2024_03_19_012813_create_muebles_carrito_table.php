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
        Schema::create('muebles_carrito', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_mueble');
            $table->foreign('id_mueble')->references('id')->on('muebles');
            $table->unsignedBigInteger('id_carrito');
            $table->foreign('id_carrito')->references('id')->on('carrito');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('muebles_carrito');
    }
};
