<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Ventas</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Ventas Realizadas</h1>
        <a href="realizarVenta.php" class="btn btn-success">Nueva Venta</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th colspan="7">Lista de Ventas</th>
            </tr>
            <tr>
                <th>Nombre Cliente</th>
                <th>Fecha</th>
                <th>Total</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarVentas();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['nombre_cliente']}</td>
                    <td>{$row['fecha_venta']}</td>
                    <td>{$row['total']}</td>
                    <td>{$row['producto']}</td>
                    <td>{$row['cantidad']}</td>
                    <td>{$row['precio_unitario']}</td>
                    <td>
                        <a href='eliminar.php?id={$row['id_venta']}' class='btn btn-danger'>Eliminar</a>
                    </td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
