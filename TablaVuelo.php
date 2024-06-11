<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "aeropro";//cambiar database

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Consulta SQL para obtener los vuelos
$sql = "SELECT * FROM Vuelos";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Lista de Vuelos</title>
    <style>
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        /* Estilos de la tabla */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Estilo de fila alterna */
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        /* Estilo de fila al pasar el cursor */
        tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>

<h2>Lista de Vuelos</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Operador</th>
        <th>SubOP</th>
        <th>Matrícula</th>
        <th>Empresa</th>
        <th>Precio</th>
        <th>Origen</th>
        <th>Destino</th>
        <th>Fecha de Salida</th>
        <th>Fecha de Llegada</th>
        <th>Hora</th>
        <th>Horario</th>
        <th>Tipo de Vuelo</th>
        <th>Modo de Vuelo</th>
    </tr>

    <?php
    if ($result->num_rows > 0) {
        // Salida de datos de cada fila
        while($row = $result->fetch_assoc()) {
            // Formatear fechas
            $fechaSalida = strtotime($row['FechaSalida']);
            $fechaLlegada = strtotime($row['FechaLlegada']);

            // Verificar si las fechas son válidas
            $fechaSalidaFormatted = $fechaSalida ? date('d/m/Y', $fechaSalida) : 'Formato incorrecto';
            $fechaLlegadaFormatted = $fechaLlegada ? date('d/m/Y', $fechaLlegada) : 'Formato incorrecto';

            // Salida de los datos en la tabla
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['Operador'] . "</td>
                    <td>" . $row['SubOP'] . "</td>
                    <td>" . $row['Matricula'] . "</td>
                    <td>" . $row['Empresa'] . "</td>
                    <td>" . $row['Precio'] . "</td>
                    <td>" . $row['Origen'] . "</td>
                    <td>" . $row['Destino'] . "</td>
                    <td>" . $fechaSalidaFormatted . "</td>
                    <td>" . $fechaLlegadaFormatted . "</td>
                    <td>" . $row['Hora'] . "</td>
                    <td>" . $row['Horario'] . "</td>
                    <td>" . $row['TipoVuelo'] . "</td>
                    <td>" . $row['ModoVuelo'] . "</td>
                  </tr>";
        }
    } else {
        echo "<tr><td colspan='14'>No se encontraron resultados</td></tr>";
    }
    $conn->close();
    ?>
</table>

</body>
</html>