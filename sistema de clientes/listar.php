<?php include "../includes/funciones.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container php">
        <?php include '../menu.php'; ?>
        <h1>Lista de Clientes</h1>
        <a href="crear.php" class="btn btn-success">Nuevo Cliente</a>
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th colspan="7">Clientes</th>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
                <th>Dirección</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarClientes();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>{$row['id_cliente']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['apellido']}</td>
                            <td>{$row['email']}</td>
                            <td>{$row['telefono']}</td>
                            <td>{$row['direccion']}</td>
                            <td>
                                <a href='editar.php?id={$row['id_cliente']}' class='btn btn-warning'>Editar</a>
                                <a href='eliminar.php?id={$row['id_cliente']}' class='btn btn-danger'>Eliminar</a>
                            </td>
                        </tr>";
            }
            ?>
        </table>
    </div>
</body>

</html>