<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Bienvenido, <span id="userName"></span>!</h1>
        <div id="welcomeMessage" class="mt-3" style="display: none;">
            <h2 id="message"></h2>
        </div>

        <a href="{{ route('register.form') }}" class="btn btn-danger mt-3">Registrar</a>

        <button id="logoutButton" class="btn btn-danger mt-3">Cerrar Sesión</button>
    </div>
    <script>
        document.getElementById('logoutButton').addEventListener('click', async () => {
    try {
        const response = await fetch('http://127.0.0.1:8000/api/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Authorization': `Bearer ${localStorage.getItem('token')}` // Enviar el token
            }
        });

        if (response.ok) {
            const data = await response.json();
            alert(data.message);
            localStorage.removeItem('token');
            localStorage.removeItem('user_name');
          // Redirigir a la vista de bienvenida
          window.location.href = '/logout'; // Redirigir a la vista de cierre de sesión
        } else {
            // Si el contenido no es JSON, puede ser un error HTML
            const text = await response.text();
            console.error('Error:', text);
            alert('Error al cerrar sesión');
        }
    } catch (error) {

        alert('Error al conectar con el servidor');
    }
});

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
