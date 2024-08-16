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
        <h2 class="heading-section mb-4 libre-baskerville-regular">LISTA USUARIOS</h2>
        
        <div id="tabla" class="table-container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody id="info">
                </tbody>
            </table>

            <div class="text-center mt-4">
                <a href="{{ route('home.form') }}"
                   class="btn btn-outline-dark submit p-3 px-5">Volver</a>
            </div>
        </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>

</html>
