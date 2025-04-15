<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Habitaciones</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Habitaciones Registradas</h1>
        <a href="crear.php" class="btn btn-success">Nueva Habitación</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Número</th>
                <th>Tipo</th>
                <th>Precio por Noche</th>
                <th>Descripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarHabitaciones(); // Función que obtiene los registros de la tabla habitaciones
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_habitacion']}</td>
                        <td>{$row['numero']}</td>
                        <td>{$row['tipo']}</td>
                        <td>{$row['precio_noche']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['estado']}</td>
                        <td>
                            <a href='editar.php?id={$row['id_habitacion']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$row['id_habitacion']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>