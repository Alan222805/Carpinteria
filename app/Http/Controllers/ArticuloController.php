<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articulos = Articulo::all();
        return $articulos;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $articulo = new Articulo();
        $articulo->nombre = $request->nombre;
        $articulo->color = $request->color;
        $articulo->precio = $request->precio;
        $articulo->dimensiones = $request->dimensiones;
        $articulo->material = $request->material;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->save();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $idMueble)
    {
        $articulo = Articulo::findOrFail($idMueble);
        $articulo->nombre = $request->nombre;
        $articulo->color = $request->color;
        $articulo->precio = $request->precio;
        $articulo->dimensiones = $request->dimensiones;
        $articulo->material = $request->material;
        $articulo->stock = $request->stock;
        $articulo->descripcion = $request->descripcion;
        $articulo->save();
        return $articulo;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $idMueble)
    {
        $articulo = Articulo::destroy($idMueble);
        return $articulo;
    }
}

