<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Cotizaciones;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function servicioCliente()
    {
        return view('Servicio_al_cliente');
    }

    public function catalogo()
    {
        return view('catalogo');
    }

    public function cotizaciones(){
        return view('Cotizaciones');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'nombreCliente' => 'required|max:255',
            'paterno' => 'required|max:255',
            'materno' => 'required|max:255',
            'correo' => 'required|email',
            'telefono' => 'required|max:255',
            'categoriaMueble' => 'required',
            'altoMueble' => 'required|numeric',
            'anchoMueble' => 'required|numeric',
            'largoMueble' => 'required|numeric',
            'materialMueble' => 'required',
            'colorMueble' => 'required',
            'descripcionMueble' => 'required',
        ]);

        $cotizacion = new Cotizaciones();
        $cotizacion->nombreCliente = $request->nombreCliente;
        $cotizacion->paterno = $request->paterno;
        $cotizacion->materno = $request->materno;
        $cotizacion->correo = $request->correo;
        $cotizacion->telefono = $request->telefono;
        $cotizacion->categoriaMueble = $request->categoriaMueble;
        $cotizacion->altoMueble = $request->altoMueble;
        $cotizacion->anchoMueble = $request->anchoMueble;
        $cotizacion->largoMueble = $request->largoMueble;
        $cotizacion->materialMueble = $request->materialMueble;
        $cotizacion->colorMueble = $request->colorMueble;
        $cotizacion->descripcionMueble = $request->descripcionMueble;
        $cotizacion->save();

        return redirect()->route('Cotizaciones.user'); 
    }
    
}
