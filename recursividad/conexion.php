<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$basedatos = "recursividad_db";

$conn = new mysqli($servidor, $usuario, $password, $basedatos);

if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8mb4");

echo "Conexión exitosa a la base de datos";
?>