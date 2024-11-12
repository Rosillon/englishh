<?php
session_start();
include 'conexion.php'; // Incluye el archivo de conexión

// Obtener los datos del formulario
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

// Consulta para verificar las credenciales
$sql = "SELECT * FROM estudiantes WHERE usuario='$usuario'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if (password_verify($contrasena, $row['contrasena'])) {
        // Iniciar sesión
        $_SESSION['usuario'] = $row['usuario'];
        echo "Inicio de sesión exitoso";
        // Redirigir a la página de inicio o panel de usuario
        header("Location: dashboard.php");
        exit();
    } else {
        echo "Contraseña incorrecta";
    }
} else {
    echo "Usuario no encontrado";
}

$conn->close();
?>
