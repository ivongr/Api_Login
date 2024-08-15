<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sesión Cerrada</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script type="module" src="{{ asset('js/app.js') }}"></script>

</head>

<body>

    <section class="ftco-section d-flex align-items-center" style="height: 100vh;">
        <div class="container text-center">

            <h1 class="heading-section text-danger">
                <i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
                Sesión Cerrada
            </h1>

            <div class="alert alert-success mt-4">
                Tu sesión ha sido cerrada con éxito.
            </div>

            <a href="{{ route('login.form') }}" class="btn btn-primary rounded submit p-3 px-5 mt-4">
                Iniciar Sesión
            </a>

        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>

</body>

</html>
