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
</main>
@endsection