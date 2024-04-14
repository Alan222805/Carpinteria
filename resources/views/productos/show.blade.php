<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion del Producto</title>
</head>

<body>
    <div class="container">
        <h1>{{ $producto->nombre }}</h1>
        <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}" style="max-width: 100%;">
        <p>{{ $producto->descripcion }}</p>
        <p>Precio: ${{ $producto->precio }}</p>
        <a href="{{ route('catalogo') }}" class="btn btn-info">Volver a la lista</a>
    </div>
</body>

</html>
