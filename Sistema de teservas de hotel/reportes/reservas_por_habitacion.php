<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Reservas por Habitaciones</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Reservas por Habitaciones</h1>
        <a href="pdf_reservas_por_habitacion.php" class="btn btn-danger">Descargar PDF</a>
        <table>
            <tr>
                <th>Habitación</th>
                <th>Reservas Confirmadas</th>
            </tr>
            <?php

            $sql = "SELECT h.numero AS numero_habitacion, COUNT(r.id_reserva) AS total
                    FROM habitaciones h
                    LEFT JOIN reservas r ON h.id_habitacion = r.id_habitacion
                    WHERE r.estado = 'confirmada'
                    GROUP BY h.id_habitacion";
            $result = $conn->query($sql);

            if (!$result) {
                die("Error en la consulta: " . $conn->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>Habitación {$row['numero_habitacion']}</td>
                        <td>{$row['total']}</td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>