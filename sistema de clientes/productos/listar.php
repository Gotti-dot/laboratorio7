<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
    <?php include '../menu.php'; ?>
        <h1>Productos Disponibles</h1>
        <a href="crear.php" class="btn btn-success">Nueva Producto</a>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th colspan="7">Lista de Productos</th>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Precio</th>
            <th>Stock</th>
            <th>Categoría</th>
            <th>Acciones</th>
        </tr>
        <?php
        $result = listarProductos();
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['id_producto']}</td>
                <td>{$row['nombre']}</td>
                <td>{$row['descripcion']}</td>
                <td>{$row['precio']}</td>
                <td>{$row['stock']}</td>
                <td>{$row['categoria']}</td>
                <td>
                    <a href='editar.php?id={$row['id_producto']}' class='btn'>Editar</a>
                    <a href='eliminar.php?id={$row['id_producto']}' class= 'btn btn-danger'>Eliminar</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    </div>
</body>
</html>