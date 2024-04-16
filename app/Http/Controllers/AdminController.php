<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function resumenVentas()
    {
        return view('Resumen_Ventas');
    }
}
