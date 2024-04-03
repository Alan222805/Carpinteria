<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function resumenVentas()
    {
        return view('Resumen_Ventas');
    }

    public function salesByMonth()
    {
        $sales = DB::table('Compras')
                   ->select(
                       DB::raw('SUM(total_pagado) as total'),
                       DB::raw('MONTH(fecha) as month'),
                       DB::raw('YEAR(fecha) as year')
                   )
                   ->groupBy('year', 'month')
                   ->orderBy('year', 'asc')
                   ->orderBy('month', 'asc')
                   ->get();

        return response()->json($sales);
    }
}
