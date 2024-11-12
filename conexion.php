<?php
// Datos de conexión
$servername = "sql300.infinityfree.com";
$username = "if0_37696712";
$password = "2EUutZap0YCG";
$dbname = "if0_37696712_db_englishexpress";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>
