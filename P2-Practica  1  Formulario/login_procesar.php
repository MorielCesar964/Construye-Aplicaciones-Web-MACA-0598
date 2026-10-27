<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];

    // Insertar usuario en la tabla 'usuarios'
    $sql = "INSERT INTO usuarios (gmail, password) VALUES ('$gmail', '$password')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>
                alert('¡Usuario registrado con éxito!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error al registrar el usuario: " . $conexion->error;
    }
}

$conexion->close();
?>