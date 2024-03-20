<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('Cotizaciones');
    }

    public function servicioCliente()
    {
        return view('Servicio_al_cliente');
    }

    public function catalogo()
    {
        return view('catalogo');
    }
}
