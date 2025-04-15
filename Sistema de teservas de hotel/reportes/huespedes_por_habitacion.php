<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Huéspedes por Habitaciones</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Huéspedes Reservados por Habitaciones</h1>
        <a href="pdf_huespedes_por_habitacion.php" class="btn btn-danger">Descargar PDF</a>
        <?php

        $sql = "SELECT h.numero AS numero_habitacion, p.nombre, p.apellido
                FROM reservas r
                JOIN huespedes p ON r.id_huesped = p.id_huesped
                JOIN habitaciones h ON r.id_habitacion = h.id_habitacion
                ORDER BY h.numero";
        $result = $conn->query($sql);

        if (!$result) {
            die("Error en la consulta: " . $conn->error);
        }

        $current_habitacion = "";
        while ($row = $result->fetch_assoc()) {
            if ($current_habitacion != $row['numero_habitacion']) {
                if ($current_habitacion != "") echo "</ul>";
                echo "<h2>Habitación {$row['numero_habitacion']}</h2><ul>";
                $current_habitacion = $row['numero_habitacion'];
            }
            echo "<li>{$row['nombre']} {$row['apellido']}</li>";
        }
        if ($current_habitacion != "") echo "</ul>";
        ?>
    </div>
</body>
</html>