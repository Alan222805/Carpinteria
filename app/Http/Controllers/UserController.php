<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
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

    
}
