<?php
include("conexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fragancia = $_POST['fragancia'];
    $cantidad = $_POST['cantidad'];

    // Insertar datos en la tabla 'pedidos'
    $sql = "INSERT INTO pedidos (fragancia, cantidad) VALUES ('$fragancia', '$cantidad')";

    if ($conexion->query($sql) === TRUE) {
        echo "<script>
                alert('¡Pedido registrado con éxito en la base de datos!');
                window.location.href = 'index.html';
              </script>";
    } else {
        echo "Error al guardar el pedido: " . $conexion->error;
    }
}

$conexion->close();
?>