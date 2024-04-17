@extends('Comun')
@section('estilos')
<link rel="stylesheet" href="/css/resumen_ventas.css">
<script src="https://kit.fontawesome.com/246e95ada1.js" crossorigin="anonymous"></script>
@endsection

@section('ContenidoPrincipal')
<main>
    <h1 class="titulo_pantalla">Resumen de Ventas</h1>
    <div class="contenedor-carrusel">
        <button class="botones-carrusel" id="izquierda"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z"/></svg></button>
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
        <button class="botones-carrusel" id="derecha"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M278.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L210.7 256 73.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"/></svg></button>
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