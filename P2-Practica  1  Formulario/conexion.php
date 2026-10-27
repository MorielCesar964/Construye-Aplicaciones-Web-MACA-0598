<?php
$host = "localhost";
$usuario = "root";
$password = "";
$bd = "perfumeria_scent";

// Crear conexión
$conexion = new mysqli($host, $usuario, $password, $bd);

// Verificar si hay error en la conexión
if ($conexion->connect_error) {
    die("Error de conexión a la Base de Datos: " . $conexion->connect_error);
}
?>