<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - English Express</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://wallpapercave.com/wp/wp3457127.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            color: white;
        }
        .register-container {
            background: rgba(255, 255, 255, 0.9);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            max-width: 400px;
            width: 100%;
            text-align: center;
            color: #333;
        }
        .logo {
            margin-bottom: 1rem;
        }
        .register-title {
            font-size: 1.5rem;
            margin-bottom: 1rem;
            color: #d32f2f;
        }
        .input-group {
            margin-bottom: 0.75rem;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 0.25rem;
            color: #333;
            font-weight: bold;
            font-size: 0.875rem;
        }
        .input-group input,
        .input-group select {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 0.875rem;
        }
        .register-button {
            background-color: #d32f2f;
            color: white;
            padding: 0.75rem;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            margin-bottom: 1rem;
            transition: background-color 0.3s ease;
        }
        .register-button:hover {
            background-color: #b71c1c;
        }
        .login-link {
            color: #d32f2f;
            text-decoration: none;
            font-size: 0.875rem;
            display: block;
            margin-top: 1rem;
        }
        .login-link:hover {
            text-decoration: underline;
        }
        .notification {
            display: none;
            padding: 1rem;
            margin-top: 1rem;
            border-radius: 5px;
        }
        .notification.success {
            background-color: #d4edda;
            color: #155724;
        }
        .notification.error {
            background-color: #f8d7da;
            color: #721c24;
        }
        @media (max-width: 768px) {
            .register-container {
                padding: 1rem;
            }
            .register-title {
                font-size: 1.25rem;
            }
            .register-button {
                padding: 0.5rem;
                font-size: 0.875rem;
            }
        }
    </style>
</head>
<body>
    <div class="register-container">
        <img src="https://i.ibb.co/B4x2HJ2/U-E-Colegio-Santa-Rita.png" class="h-10000 w-10000" height="80" alt="U-E-Colegio-Santa-Rita" width="400" border="0">
        <div class="register-title">Registro</div>
        <form id="registerForm">
            <div class="input-group">
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" required>
            </div>
            <div class="input-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" id="apellidos" name="apellidos" required>
            </div>
            <div class="input-group">
                <label for="correo">Correo</label>
                <input type="email" id="correo" name="correo" required>
            </div>
            <div class="input-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento</label>
                <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" required>
            </div>
            <div class="input-group">
                <label for="genero">Género</label>
                <select id="genero" name="genero" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>
            <div class="input-group">
                <label for="cedula_identidad">Cédula de Identidad</label>
                <input type="text" id="cedula_identidad" name="cedula_identidad" required>
            </div>
            <div class="input-group">
                <label for="usuario">Usuario</label>
                <input type="text" id="usuario" name="usuario" required>
            </div>
            <div class="input-group">
                <label for="facultad">Facultad</label>
                <input type="text" id="facultad" name="facultad" required>
            </div>
            <div class="input-group">
                <label for="contrasena">Contraseña</label>
                <input type="password" id="contrasena" name="contrasena" required>
            </div>
            <div class="input-group">
                <label for="repetir_contrasena">Repetir Contraseña</label>
                <input type="password" id="repetir_contrasena" name="repetir_contrasena" required>
            </div>
            <button type="submit" class="register-button">REGISTRARSE</button>
            <div id="notification" class="notification"></div>
        </form>
        <a href="Login.php" class="login-link">¿Ya tienes cuenta? Inicia sesión aquí</a>
    </div>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var formData = new FormData(this);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'register.php', true);
            xhr.onload = function () {
                var notification = document.getElementById('notification');
                if (xhr.status === 200) {
                    notification.className = 'notification success';
                    notification.textContent = 'Registro exitoso. ¡Bienvenido a English Express!';
                } else {
                    notification.className = 'notification error';
                    notification.textContent = 'Hubo un error en el registro. Por favor, inténtalo de nuevo.';
                }
                notification.style.display = 'block';
            };
            xhr.send(formData);
        });
    </script>
</body>
</html>
