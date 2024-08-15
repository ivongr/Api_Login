document.addEventListener('DOMContentLoaded', function() {
    // Manejador para el formulario de inicio de sesión
    const loginForm = document.getElementById('inicioformulario');
    if (loginForm) {
        loginForm.addEventListener('submit', async function(event) {
            event.preventDefault();

            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;

            try {

                //Enviar una Solicitud Asíncrona a la API:Utiliza fetch para enviar una solicitud HTTP POST a la URL de la API para el inicio de sesión.
                const response = await fetch('http://127.0.0.1:8000/api/login', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({//se envia los datos en formato json
                        email,
                        password
                    })
                });
        
                const data = await response.json();
        

                if (response.ok) {
                    localStorage.setItem('token', data.token); // Almacenar el token
                    swal({  // Mostrar el mensaje de bienvenida en un alarta
                        title: "¡Sesión Éxitosa!",
                        text: data.message,
                        icon: "success",
                        button: "OK",
                    }).then(() => {
                        // Después de cerrar la alerta, redirige al usuario a la página de inicio de sesión
                // Redirigir a la vista de bienvenida
                        window.location.href = data.redirect;
                    });
                } else {
                    swal({
                        title: "Error",
                        text: data.message || 'Error en el inicio de sesión.',
                        icon: "error",
                        button: "OK",
                    });
                }
            } catch (error) {
                console.error('Error:', error);
                swal({
                    title: "Error",
                    text: 'Error al conectar con el servidor',
                    icon: "error",
                    button: "OK",
                });
            }
        });
    }

    // Manejador para el formulario de registro
    const registerForm = document.getElementById('registroFormulario');
    if (registerForm) {
        registerForm.addEventListener('submit', async function(event) {
            event.preventDefault();

            const nombre = document.getElementById('nombre').value;
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            const password_confirmation = document.getElementById('password_confirmation').value;

            try {
                const csrfToken = document.querySelector('input[name="_token"]').value;

                const response = await fetch('http://127.0.0.1:8000/api/register', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',// Tipo de contenido que se envía (JSON)
                        'X-CSRF-TOKEN': csrfToken // Token CSRF para seguridad
                    },
                    body: JSON.stringify({ nombre, email, password, password_confirmation }) // Datos que se envían en la petición

                });

                const data = await response.json(); // Convierte la respuesta en un objeto JSON
                console.log('Response data:', data);// Imprime los datos de la respuesta en la consola

                if (response.ok) {
                       // Si la respuesta es exitosa, muestra un mensaje de éxito

                    swal({
                        title: "Éxito",
                        text: data.message || 'Registro exitoso!',
                        icon: "success",
                        button: "OK",
                    }).then(() => {
                          // Después de cerrar la alerta, redirige al usuario a la página de inicio de sesión
                        window.location.href = '/login';
                    });
                } else {
                      // Si hay un error, muestra un mensaje de error con la información recibida
                    swal({
                        title: "Error",
                        text: data.message || 'Error en el registro.',
                        icon: "error",
                        button: "OK",
                    });
                }

            } catch (error) {
                // Si hay un problema con la conexión o el servidor, muestra un mensaje de error
                console.error('Error:', error);
                swal({
                    title: "Error",
                    text: 'Error al conectar con el servidor',
                    icon: "error",
                    button: "OK",
                });
            }
        });
    }
});
