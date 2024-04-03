@extends('Comun')
@section('estilos')
<link rel="stylesheet" href="/css/resumen_ventas.css">
@endsection

@section('ContenidoPrincipal')
<main>
    <h1 class="titulo_pantalla">Resumen de Ventas</h1>
    <article class="contenedor_meses">
        <div class="mes">
            <h2>Marzo</h2>
            <div class="contenedor_informacion">
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Numero de ventas</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>50 ventas</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Ingresos totales</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>$15,000.00</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Crecimiento/Decrecimiento</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p> - 10% (↓) </p>
                </div>
            </div>
        </div>
        <div class="mes">
            <h2>Abril</h2>
            <div class="contenedor_informacion">
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Numero de ventas</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>50 ventas</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Ingresos totales</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>$15,000.00</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Crecimiento/Decrecimiento</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p> - 10% (↓) </p>
                </div>
            </div>
        </div>
        <div class="mes">
            <h2>Mayo</h2>
            <div class="contenedor_informacion">
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Numero de ventas</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>50 ventas</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Ingresos totales</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p>$15,000.00</p>
                </div>
                <div class="informacion">
                    <span class="subtitulo">
                        <h3>Crecimiento/Decrecimiento</h3><button class="btn_informacion"><img src="/imagenes/boton-de-informacion.png" alt=""></button>
                    </span>
                    <p> - 3% (↓) </p>
                </div>
            </div>
        </div>
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