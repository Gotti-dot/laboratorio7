<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Huéspedes</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Huéspedes Registrados</h1>
        <a href="crear.php" class="btn btn-success">Nuevo Huésped</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Documento</th>
                <th>Nacionalidad</th>
                <th>Teléfono</th>
                <th>Email</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarHuespedes();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_huesped']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apellido']}</td>
                        <td>{$row['documento']}</td>
                        <td>{$row['nacionalidad']}</td>
                        <td>{$row['telefono']}</td>
                        <td>{$row['email']}</td>
                        <td>
                            <a href='editar.php?id={$row['id_huesped']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$row['id_huesped']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>