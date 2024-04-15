<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Informacion del Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            background: white;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Centrar el contenido */
        }
        img {
            max-width: 100%;
            height: auto;
            border-radius: 5px; /* Añadir bordes redondeados a la imagen */
            margin-bottom: 20px;
        }
        h1 {
            margin-bottom: 20px;
        }
        p {
            font-size: 18px; /* Tamaño de fuente para los párrafos */
            line-height: 1.6; /* Espaciado de línea para mejorar la legibilidad */
            margin-bottom: 10px; /* Espaciado debajo de los párrafos */
        }
        .btn-info {
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #17a2b8;
            color: white;
            text-transform: uppercase; /* Estilo para el texto del botón */
            letter-spacing: 1px; /* Espaciado entre letras para el botón */
            transition: background-color 0.3s; /* Transición suave para efectos de hover */
        }
        .btn-info:hover {
            background-color: #1391a1; /* Cambiar el color de fondo al hacer hover */
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>{{ $producto->nombre }}</h1>
        <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}">
        <p>{{ $producto->descripcion }}</p>
        <p><strong>Precio:</strong> ${{ $producto->precio }}</p>
        <a href="{{ route('catalogo') }}" class="btn btn-info">Volver a la lista</a>
    </div>
</body>

</html>
