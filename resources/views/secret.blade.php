<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página privada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/XR7ykIZDrvuZKMRqHOrBnVFBLG0DitFPr4jtjFhxalUtuPFmBp4VmVor" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
                Página privada
            </a>
            <div class="col-md-3 text-end">
                <a href="{{ route('logout') }}" class="btn btn-outline-primary me-2">Salir</a>
            </div>
        </header>
    </div>
    <article class="container">
        <h2>Tu sección privada</h2>
    </article>
</body>
</html>
