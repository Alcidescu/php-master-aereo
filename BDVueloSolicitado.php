<?php
require 'conexion.php';

// Recoger datos del formulario
$from = $_POST['from'];
$to = $_POST['to'];
$departure = $_POST['departure'];
$return = $_POST['return'];
$trip = $_POST['trip'];

// Insertar datos en la base de datos
$sql = "INSERT INTO vuelos_solicitados (origen, destino, fecha_salida, fecha_llegada, tipo_viaje) VALUES ('$from', '$to', '$departure', '$return', '$trip')";

if (mysqli_query($conexion, $sql)) {
    echo "<script>
    location.href = 'TablaVuelo.php';
    </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

// Cerrar conexión
mysqli_close($conexion);
?>
