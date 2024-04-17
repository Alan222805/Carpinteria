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
        $sales = DB::table('compras')
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


    //Función para obtener el nombre del mes a partir del número
    public function ventasPorMes()
    {
        $ventas = DB::table('Compras AS c')
            ->select(
                DB::raw('MONTH(c.fecha) AS Mes'), // Corrige la sintaxis aquí
                DB::raw('SUM(c.total_pagado) AS Ganancias'),
                DB::raw('COUNT(*) AS Cantidad_Ventas')
            )
            ->whereRaw('YEAR(c.fecha) = YEAR(NOW())') // Usa whereRaw para simplificar
            ->groupBy(DB::raw('MONTH(c.fecha)')) // Asegúrate de agrupar por la expresión correcta
            ->get();


        return view('Resumen_Ventas', compact('ventas'));
    }
}
