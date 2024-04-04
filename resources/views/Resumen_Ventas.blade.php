@extends('Comun')
@section('estilos')
<script src="https://kit.fontawesome.com/5192de58a9.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/css/resumen_ventas.css">
@endsection

@section('ContenidoPrincipal')
<main>
    <h1 class="titulo_pantalla">Resumen de Ventas</h1>
    <article class="contenedor_meses">
        <div class="flechas-carrusel">
            <button id="izquierda"><i class="fa-solid fa-angle-left"></i></button>
            <button id="derecha"><i class="fa-solid fa-angle-right"></i></button>
        </div>
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
                    <span class="subtitulo">
                        <h3>Numero de ventas</h3></button>
                    </span>
                    <p>{{$venta -> Cantidad_Ventas}} ventas</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Ingresos totales</h3></button>
                    </span>
                    <p>${{$venta -> Ganancias}}</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Crecimiento/Decrecimiento</h3></button>
                    </span>
                    <p> - 10% (↓) </p>
                </div>
            </div>
        </div>
        @endforeach
    </article>
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
    <script>
        fetch('/sales-by-month')
            .then(response => response.json())
            .then(data => {
                const ctx = document.getElementById('salesChart').getContext('2d');

                // Función para obtener el nombre del mes a partir del número
                const getMonthName = (monthNumber) => {
                    const date = new Date();
                    date.setMonth(monthNumber - 1); // Los meses en JavaScript son base 0
                    return date.toLocaleString('es', {
                        month: 'long'
                    });
                };

                // Preparar los colores de las barras
                const backgroundColors = data.map((item, index) => {
                    if (index === 0) { // Para el primer elemento, asume verde porque no hay mes anterior con el que comparar
                        return 'rgba(24, 174, 0, 0.2)'; // Verde
                    } else {
                        // Si las ventas del mes actual son menores que el mes anterior, usa rojo
                        return item.total < data[index - 1].total ? 'rgba(249, 5, 5, 0.3)' : 'rgba(24, 174, 0, 0.3)';
                    }
                });

                // Preparar los colores de los bordes de las barras
                const borderColors = data.map((item, index) => {
                    if (index === 0) { // Para el primer elemento, asume verde porque no hay mes anterior con el que comparar
                        return 'rgba(24, 174, 0, 1)'; // Verde
                    } else {
                        // Si las ventas del mes actual son menores que el mes anterior, usa rojo
                        return item.total < data[index - 1].total ? 'rgba(249, 5, 5, 1' : 'rgba(24, 174, 0, 1)';
                    }
                });

                const salesChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: data.map(item => `${getMonthName(item.month)} ${item.year}`),
                        datasets: [{
                            data: data.map(item => item.total),
                            backgroundColor: backgroundColors, // Usa el array de colores
                            borderColor: borderColors, // Usa el array de colores
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: false // Aquí se desactiva la leyenda
                            }
                        }
                    }
                });
            });
    </script>
</main>
@endsection