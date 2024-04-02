<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    use HasFactory;
    protected $table = 'articulos';
    protected $primaryKey = 'idMueble';
    protected $fillable = ['nombre', 'color', 'precio', 'dimensiones', 'material', 'stock', 'descripcion'];
}
