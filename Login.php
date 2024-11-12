<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>English Express Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"/>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: url('https://i.ibb.co/ZmKxgcF/fffd.png');
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 85vh;
            margin: 10;
            color: white;
        }
        .login-container {
            background: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            max-width: 450px;
            width: 800%;
            text-align: center;
            color: #333;
        }
        .logo {
            margin-bottom: 1rem;
        }
        .login-title {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #d32f2f;
        }
        .input-group {
            margin-bottom: 1.0rem;
            text-align: left;
        }
        .input-group label {
            display: block;
            margin-bottom: 0.5rem;
            color: #333;
        }
        .input-group input {
            width: 96%;
            padding: 0.45rem;
            border: 0.75px solid #ccc;
            border-radius: 4px;
            font-size: 1.05rem;
        }
        .login-button {
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
        .login-button:hover {
            background-color: #b71c1c;
        }
        .register-link {
            color: #d32f2f;
            text-decoration: none;
            font-size: 0.9rem;
            display: block;
            margin-bottom: 1rem;
        }
        .register-link:hover {
            text-decoration: underline;
        }
        .contact-button {
            background-color: white;
            color: #d32f2f;
            padding: 0.75rem;
            border: 1px solid #d32f2f;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        .contact-button:hover {
            background-color: #d32f2f;
            color: white;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <a href="index.php"><img src="https://i.ibb.co/B4x2HJ2/U-E-Colegio-Santa-Rita.png" class="h-10000 w-10000" height="100" alt="U-E-Colegio-Santa-Rita" width="450" border="0"></a>
        <div class="login-title">Iniciar Sesión</div>
        <form action="securitylogin.php" method="POST">
            <div class="input-group">
                <label for="username">Nombre de usuario</label>
                <input type="text" id="username" name="usuario" placeholder="Nombre de usuario" required>
            </div>
            <div class="input-group">
                <label for="password">Contraseña</label>
                <input type="password" id="password" name="contrasena" placeholder="Contraseña" required>
            </div>
            <button type="submit" class="login-button">ACCEDER</button>
        </form>
        <a href="Registro.php" class="register-link">¿Aún no estás registrado? Regístrate aquí</a>
        <button class="contact-button">Contáctenos</button>
    </div>
</body>
</html>
