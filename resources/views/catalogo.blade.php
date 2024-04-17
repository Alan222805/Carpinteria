@extends('Comun')
@section('estilos')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="/css/style.css">
<title>Catalogo</title>
<style>
    .titulo {
        text-align: center;
        /* centra el texto */
        padding: 20px 0;
        /* espacio arriba y abajo del texto */
        margin: 20px auto;
        /* margen arriba y abajo, centrado horizontalmente */
        width: 80%;
        /* ancho del título */
    }

    h1 {
        /* color: #333; /* texto en color gris oscuro */
        font-family: 'SF Pro Text', sans-serif;
        /* tipo de fuente Arial */
        /* font-size: 24px; /* tamaño de fuente */
        text-shadow: 4px 4px 6px rgba(0, 0, 0, 0.5);
        /* sombra de texto para mejorar legibilidad */
        -webkit-text-stroke: 1.5px black;
        /* contorno negro fino para el texto */
    }
</style>
@endsection

@section('ContenidoPrincipal')

<div>
    <main>

        <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
                <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/imagenes/carrusel1.jpg" alt="Carrusel1" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h1 style="color: #ffffff"><big><big><big><big><big></big><big>Catalogo de Productos</big></big></big></big></big></h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Muebleria el Castor</h3>
                        <p>El interior de tu hogar podria verse asi!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/imagenes/carrusel2.jpg" alt="Carrusel2" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h1 style="color: #333"><big><big><big><big><big></big><big>Catalogo de Productos</big></big></big></big></big></h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Muebleria el Castor</h3>
                        <p>El interior de tu hogar podria verse asi!</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="/imagenes/carrusel3.jpg" alt="Carrusel1" class="d-block" style="width:100%">
                    <div class="carousel-caption">
                        <h1><big><big><big><big><big></big><big>Catalogo de Productos</big></big></big></big></big></h1>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <h3>Muebleria el Castor</h3>
                        <p>El interior de tu hogar podria verse asi!</p>
                    </div>
                </div>
            </div>

            <!-- Left and right controls/icons -->
            <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>
    </main>
</div>
<br>
{{-- <div class="container mt-3">
        <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar un nuevo producto</a>
</div>
<br> --}}
<div class="container mt-3 mb-5">
    <div class="row">
        @foreach ($productos as $producto)
        <div class="card cold-sm-4" style="width:400px">
            <img class="card-img-top" src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}" style="width:100%">
            <div class="card-body">
                <h4 class="card-title">{{ $producto->nombre }}</h4>
                <p class="card-text">{{ $producto->descripcion }}</p>
                <p class="card-text">Precio: ${{ $producto->precio }}</p>
                <a href="{{ route('showProducto', $producto->id) }}" class="btn btn-primary">Ver mas...</a>
            </div>
        </div>
        <br>
        @endforeach
    </div>
</div>
@endsection