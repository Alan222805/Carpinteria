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
                <a class="navbar-brand" href="#">
                    <img src="/imagenes/logo.webp" alt="Avatar Logo" style="width:70px;" class="rounded-pill">
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Nuevos Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas Especiales</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown">Categorias</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Link</a></li>
                            <li><a class="dropdown-item" href="#">Another link</a></li>
                            <li><a class="dropdown-item" href="#">A third link</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Precio</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">$100 - $500</a></li>
                            <li><a class="dropdown-item" href="#">$500 - $1000</a></li>
                            <li><a class="dropdown-item" href="#">$1000 - $5000</a></li>
                            <li><a class="dropdown-item" href="#">$5000 - $1000+++</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
    </div>
    </nav>
    </div>
    <div class="titulo">
        <h1>Catalogo de Productos</h1>
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
                            <h3>Muebleria el Castor</h3>
                            <p>El interior de tu hogar podria verse asi!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/imagenes/carrusel2.jpg" alt="Carrusel2" class="d-block" style="width:100%">
                        <div class="carousel-caption">
                            <h3>Muebleria el Castor</h3>
                            <p>El interior de tu hogar podria verse asi!</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="/imagenes/carrusel3.jpg" alt="Carrusel1" class="d-block" style="width:100%">
                        <div class="carousel-caption">
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
    <div class="container mt-3">
        <div class="row">
            <div class="card cold-sm-4" style="width:400px">
                <img class="card-img-top" src="/imagenes/camaMatrimonial.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Cama Matrimonial</h4>
                    <p class="card-text">Una cama matrimonial está diseñada para ser usada por dos personas. El ancho de
                        una
                        cama matrimonial varía desde 135 cm hasta 200 cm. La medida estándar de una cama de matrimonio
                        es de
                        150×190 cm12. Es ideal para parejas que buscan un espacio cómodo para descansar juntos.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
            <br>

            <div class="card card cold-sm-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Mesa Rustica para Exteriores</h4>
                    <p class="card-text">Una mesa con estilo rustico diseñada para exteriores usada por 5 personas.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
                <img class="card-img-bottom" src="/imagenes/mesaExterior.webp" alt="Card image" style="width:100%">
            </div>
            <br>

            <div class="card cold-sm-4" style="width:400px">
                <img class="card-img-top" src="/imagenes/camaMatrimonial.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Cama Matrimonial</h4>
                    <p class="card-text">Una cama matrimonial está diseñada para ser usada por dos personas. El ancho de
                        una
                        cama matrimonial varía desde 135 cm hasta 200 cm. La medida estándar de una cama de matrimonio
                        es de
                        150×190 cm12. Es ideal para parejas que buscan un espacio cómodo para descansar juntos.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row">
            <div class="card cold-sm-4" style="width:400px">
                <img class="card-img-top" src="/imagenes/camaMatrimonial.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Cama Matrimonial</h4>
                    <p class="card-text">Una cama matrimonial está diseñada para ser usada por dos personas. El ancho de
                        una
                        cama matrimonial varía desde 135 cm hasta 200 cm. La medida estándar de una cama de matrimonio
                        es de
                        150×190 cm12. Es ideal para parejas que buscan un espacio cómodo para descansar juntos.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
            <br>

            <div class="card card cold-sm-4" style="width:400px">
                <div class="card-body">
                    <h4 class="card-title">Mesa Rustica para Exteriores</h4>
                    <p class="card-text">Una mesa con estilo rustico diseñada para exteriores usada por 5 personas.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
                <img class="card-img-bottom" src="/imagenes/mesaExterior.webp" alt="Card image" style="width:100%">
            </div>
            <br>

            <div class="card cold-sm-4" style="width:400px">
                <img class="card-img-top" src="/imagenes/camaMatrimonial.webp" alt="Card image" style="width:100%">
                <div class="card-body">
                    <h4 class="card-title">Cama Matrimonial</h4>
                    <p class="card-text">Una cama matrimonial está diseñada para ser usada por dos personas. El ancho de
                        una
                        cama matrimonial varía desde 135 cm hasta 200 cm. La medida estándar de una cama de matrimonio
                        es de
                        150×190 cm12. Es ideal para parejas que buscan un espacio cómodo para descansar juntos.</p>
                    <a href="#" class="btn btn-primary">Ver mas...</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>