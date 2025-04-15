<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporte de ventas</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Reporte de Ventas</h1>
        <a href="pdf_ventas.php" class="btn btn-danger">Descargar PDF</a>
        <table border="1" cellpadding="5" cellspacing="0">
            <tr>
                <th colspan="8">Lista de Ventas</th>
            </tr>
            <tr>
                <th>ID</th>
                <th>Nombre Cliente</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Precio Unitario</th>
                <th>Total</th>
                <th>Fecha Venta</th>
            </tr>
            <?php
            $result = listarVentas();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>{$row['id_venta']}</td>
                    <td>{$row['nombre_cliente']}</td>
                    <td>{$row['producto']}</td>
                    <td>{$row['cantidad']}</td>
                    <td>{$row['precio_unitario']}</td>
                    <td>{$row['total']}</td>
                    <td>{$row['fecha_venta']}</td>
                </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
