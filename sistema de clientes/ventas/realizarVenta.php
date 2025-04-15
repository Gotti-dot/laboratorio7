<?php
include '../includes/funciones.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_cliente = $_POST['id_cliente'];
    $id_producto = $_POST['id_producto'];
    $cantidad = $_POST['cantidad'];
    $precio_unitario = $_POST['precio_unitario'];

    // Llamar a la función realizarVenta con los nuevos parámetros
    $resultado = realizarVenta($id_cliente, $id_producto, $cantidad, $precio_unitario);

    if (is_array($resultado)) {
        header("Location: listar.php"); // Redireccionar después de registrar la venta
        exit();
    } else {
        $error = $resultado; // Mostrar el mensaje de error si ocurre
    }
}

// Obtener la lista de clientes y productos
$clientes = listarClientes();
$productos = listarProductos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar Venta</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Registrar Venta</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>

        <form method="POST">
            <!-- Campo para seleccionar Cliente -->
            <div class="form-group">
                <label>Cliente</label>
                <select name="id_cliente" required>
                    <option value="">Seleccione un cliente</option>
                    <?php while ($cliente = $clientes->fetch_assoc()): ?>
                        <option value="<?= $cliente['id_cliente'] ?>">
                            <?= $cliente['nombre'] ?> <?= $cliente['apellido'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <!-- Campo para seleccionar Producto -->
            <div class="form-group">
                <label>Producto</label>
                <select name="id_producto" required>
                    <option value="">Seleccione un Producto</option>
                    <?php while ($producto = $productos->fetch_assoc()): ?>
                        <option value="<?= $producto['id_producto'] ?>">
                            <?= $producto['nombre'] ?> (<?= $producto['descripcion'] ?>)
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>

            <!-- Campo para ingresar Cantidad -->
            <div class="form-group">
                <label>Cantidad</label>
                <input type="number" name="cantidad" min="1" required>
            </div>

            <!-- Campo para ingresar Precio Unitario -->
            <div class="form-group">
                <label>Precio Unitario</label>
                <input type="number" name="precio_unitario" step="0.01" min="0" required>
            </div>

            <!-- Botones de acción -->
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
