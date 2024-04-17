<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Catalogo</title>
    
</head>

<body>
    <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="/imagenes/logo.webp" alt="Avatar Logo" style="width:70px;" class="rounded-pill">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                        <a class="nav-link" href="/">Vista Cliente</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register">Añadir Admin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Resumen_Ventas">Resumen de ventas</a>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
    </div>
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
                    <div class="carousel-item">
                        <img src="/imagenes/carrusel2.jpg" alt="Carrusel2" class="d-block" style="width:100%">
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
    <div class="container mt-3">
        <a href="{{ route('productos.create') }}" class="btn btn-success">Agregar un nuevo producto</a>
    </div>
    <br>
    <div class="container mt-3">
        <div class="row">
            @foreach ($productos as $producto)
                <div class="card cold-sm-4" style="width:400px">
                    <img class="card-img-top" src= "{{ Storage::url($producto->imagen) }}" alt= "{{ $producto->nombre }}" style="width:100%">
                    <div class="card-body">
                        <h4 class="card-title">{{ $producto->nombre }}</h4>
                        <p class="card-text">{{ $producto->descripcion }}</p>
                        <p class="card-text">Precio: ${{ $producto->precio }}</p>
                        <a href="{{ route('productos.show', $producto->id) }}" class="btn btn-primary">Ver mas...</a>
                        <a href="{{ route('productos.edit', $producto->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('productos.destroy', $producto->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
                <br>
            @endforeach
        </div>
    </div>
</body>

</html>
