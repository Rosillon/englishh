<?php
include 'conexion.php'; // Incluye el archivo de conexión

// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$genero = $_POST['genero'];
$cedula_identidad = $_POST['cedula_identidad'];
$usuario = $_POST['usuario'];
$facultad = $_POST['facultad'];
$contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT);

// Validar que las contraseñas coincidan
if ($_POST['contrasena'] !== $_POST['repetir_contrasena']) {
    http_response_code(400);
    echo "Las contraseñas no coinciden.";
    exit();
}

// Insertar datos en la base de datos
$sql = "INSERT INTO estudiantes (nombre, apellidos, correo, fecha_nacimiento, genero, cedula_identidad, usuario, facultad, contrasena)
VALUES ('$nombre', '$apellidos', '$correo', '$fecha_nacimiento', '$genero', '$cedula_identidad', '$usuario', '$facultad', '$contrasena')";

if ($conn->query($sql) === TRUE) {
    http_response_code(200);
    echo "Registro exitoso";
} else {
    http_response_code(500);
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
