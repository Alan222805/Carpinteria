<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;


class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vaciar la tabla de productos.
        DB::table('productos')->delete();

        // Crear productos ficticios.
        DB::table('productos')->insert([
            [
                'nombre' => 'Mesa de madera',
                'descripcion' => 'Mesa rústica de madera de pino.',
                'precio' => 150.00,
                'imagen' => 'public\imagenes\mesaExterior.webp'
                // 'disponible' => true,
            ],
            [
                'nombre' => 'Silla de madera',
                'descripcion' => 'Silla de madera con acabado natural.',
                'precio' => 75.00,
                'imagen' => 'public\imagenes\mesaExterior.webp'
                // 'disponible' => true,
            ],
            // ... más productos
        ]);

        // Alternativamente, para generar una cantidad de productos ficticios, puedes usar un factory:
        // \App\Models\Producto::factory()->count(50)->create();
    }
}
