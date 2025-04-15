<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Reservas</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Reservas Registradas</h1>
        <a href="registrar.php" class="btn btn-success">Nueva Reserva</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Huésped</th>
                <th>Habitación</th>
                <th>Fecha Entrada</th>
                <th>Fecha Salida</th>
                <th>Estado</th>
                <th>Total</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarReservas();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_reserva']}</td>
                        <td>{$row['nombre']} {$row['apellido']}</td>
                        <td>Habitación {$row['numero']}</td>
                        <td>{$row['fecha_entrada']}</td>
                        <td>{$row['fecha_salida']}</td>
                        <td>{$row['estado']}</td>
                        <td>{$row['total']}</td>
                        <td>
                            <a href='eliminar.php?id={$row['id_reserva']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>