<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Producto</title>
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
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="number"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        img {
            border: 1px solid #ddd;
            padding: 5px;
            border-radius: 4px;
        }

        button.btn,
        a.btn {
            padding: 10px 20px;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-primary {
            background-color: #007bff;
        }

        .btn-info {
            background-color: #17a2b8;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Editar Producto: {{ $producto->nombre }}</h1>
        <form action="{{ route('productos.update', $producto->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $producto->nombre }}"
                    required>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción:</label>
                <textarea class="form-control" id="descripcion" name="descripcion" required>{{ $producto->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" step="0.01" class="form-control" id="precio" name="precio"
                    value="{{ $producto->precio }}" required>
            </div>

            <div class="form-group">
                <label for="imagen">Imagen actual del Producto:</label>
                <div>
                    <img src="{{ Storage::url($producto->imagen) }}" alt="{{ $producto->nombre }}"
                        style="max-width: 200px;">
                </div>
            </div>

            <div class="form-group">
                <label for="imagen">Cambiar imagen del Producto:</label>
                <input type="file" class="form-control-file" id="imagen" name="imagen">
                <small class="form-text text-muted">Dejar en blanco si no desea cambiar la imagen.</small>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Producto</button>
            <a href="{{ route('productos.catalogoAdmin') }}" class="btn btn-info" style="text-decoration: none;">Volver a la lista</a>
            <!-- Añade esta sección en tu vista justo antes de cerrar el body -->
            @if (session('success'))
                <script>
                    alert('{{ session('success') }}');
                </script>
            @endif

            @if (session('error'))
                <script>
                    alert('{{ session('error') }}');
                </script>
            @endif
        </form>
    </div>

</body>

</html>
