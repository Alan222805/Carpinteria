@extends('Comun')
@section('estilos')
<script src="https://kit.fontawesome.com/5192de58a9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/resumen_ventas.css">
@endsection

@section('ContenidoPrincipal')
<main>
    <h1 class="titulo_pantalla">Resumen de Ventas</h1>
    <div class="contenedor-carrusel">
        <button class="botones-carrusel"  id="izquierda"><i class="fa-solid fa-angle-left"></i></button>
        <article class="contenedor_meses">

            @foreach($ventas as $venta)
            <div class="mes">
                @php
                $meses = [
                1 => 'Enero',
                2 => 'Febrero',
                3 => 'Marzo',
                4 => 'Abril',
                5 => 'Mayo',
                6 => 'Junio',
                7 => 'Julio',
                8 => 'Agosto',
                9 => 'Septiembre',
                10 => 'Octubre',
                11 => 'Noviembre',
                12 => 'Diciembre'
                ];
                @endphp

                <h2>{{ $meses[$venta -> Mes] }}</h2>
                <div class="contenedor_informacion">
                    <div class="informacion">
                        <div class="subtitulo">
                            <h3>Numero de ventas</h3>
                        </div>
                        <p>{{$venta -> Cantidad_Ventas}} ventas</p>
                    </div>
                    <div class="informacion">
                        <div class="subtitulo">
                            <h3>Ingresos totales</h3>
                        </div>
                        <span>$<p class="ganancias">{{$venta -> Ganancias}}</p></span>
                    </div>
                    <div class="informacion">
                        <div class="subtitulo">
                            <h3>Crecimiento / Decrecimiento</h3>
                        </div>
                        <p class="porcentajeCD"> - 10% (↓) </p>
                    </div>
                </div>
            </div>
            @endforeach

        </article>
        <button class="botones-carrusel" id="derecha"><i class="fa-solid fa-angle-right"></i></button>
    </div>
    <div class="sales-chart">
        <h2>Grafica de ventas por mes</h2>
        <div id="chartLegend">
            <span style="margin-right: 20px;">
                <span style="background-color: rgba(24, 174, 0, 0.6);"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Crecimiento
            </span>
            <span>
                <span style="background-color: rgba(249, 5, 5, 0.6);">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span> Decrecimiento
            </span>
        </div>
        <canvas id="salesChart"></canvas>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="/js/Administrador/Resumen_Ventas.js">

    </script>
</main>
@endsection