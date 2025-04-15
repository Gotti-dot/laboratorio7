<?php
include "../includes/funciones.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];

    if (crearProducto($nombre, $descripcion, $precio, $stock, $categoria)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al crear el producto.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Producto</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Nuevo Producto</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre Producto</label>
                <input type="text" name="nombre" id="nombre" required>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" id="precio" step="0.01" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" id="stock" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" id="categoria" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>