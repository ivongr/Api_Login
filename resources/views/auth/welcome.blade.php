<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <script type="module" src="{{ asset('js/app.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

</head>

<body class="body_welcome body">
    <div class="welcome-container text-center">
        <div class="image-container">
            <img src="images/home.png" alt="Home Icon" />
        </div>
        <h2 class="heading-section mb-4 libre-baskerville-regular">BIENVENIDO</h2>
        <div class="d-flex justify-content-center">
            <a href="{{ route('register.form') }}" class="btn btn-outline-success submit p-3 px-5">Registrar</a>
            <a href="{{ route('list') }}" class="btn btn-outline-info submit p-3 px-5">Lista</a>
            
        </div>
        <br>
        <button id="cerrarboton" class="btn btn-outline-danger submit p-3 px-5">Cerrar Sesión</button>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
