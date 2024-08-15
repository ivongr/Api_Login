<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script type="module" src="{{ asset('js/app.js') }}"></script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">¡Bienvenido!</h1>

        <a href="{{ route('register.form') }}" class="btn btn-outline-success submit p-3 px-5">Registrar</a>

        <button id="cerrarboton" class="btn btn-outline-info submit p-3 px-5">Cerrar Sesión</button>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
