<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    // Si utilizaste un nombre diferente para la tabla puedes especificarlo así
    protected $table = 'productos';

    // Aquí puedes definir los campos que deseas asignar masivamente
    protected $fillable = ['nombre', 'descripcion', 'precio', 'imagen'];

    // Si no deseas utilizar los timestamps, puedes desactivarlos así
    // protected $timestamps = false;
}


