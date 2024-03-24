<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro - Mueblería Elegante</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5; /* Fondo suave y claro */
            color: #333; /* Color de texto formal y legible */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .container {
            max-width: 400px;
            margin-top: 10%;
            padding: 2rem;
            background-color: #fff; /* Fondo blanco para el formulario */
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* Sombra suave para resaltar el formulario */
        }
        .form-control {
            border-radius: 20px;
            padding: .75rem 1rem;
            background-color: #e9ecef; /* Fondo de los campos de entrada neutro */
            border: 1px solid #ced4da; /* Borde sutil para los campos de entrada */
        }
        .btn-primary {
            border-radius: 20px;
            padding: .5rem 1.5rem;
            width: 100%;
            background-color: #6c757d; /* Botón de color gris formal */
            border: none;
        }
        .btn-primary:hover {
            background-color: #5a6268; /* Un tono más oscuro al pasar el ratón */
        }
    </style>
  </head>
  <body>
    <main class="container align-center p-5 shadow">
      <form method="POST" action="{{ route('validar-registro') }}">
        @csrf
        <h2 class="text-center mb-4">Registro</h2>
        <div class="mb-3">
          <label for="emailInput" class="form-label">Email</label>
          <input type="email" class="form-control" id="emailInput" name="email" required autocomplete="off">
        </div>
        <div class="mb-3">
          <label for="passwordInput" class="form-label">Password</label>
          <input type="password" class="form-control" id="passwordInput" name="password" required>
        </div>
        <div class="mb-3">
          <label for="userInput" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="userInput" name="name" required autocomplete="off">
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
      </form>
    </main>
  </body>
</html>
