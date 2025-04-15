<?php
include '../includes/funciones.php';

if (!isset($_GET['id'])) {
    header('Location: listar.php');
    exit();
}

$id = $_GET['id'];
$producto = obtenerProducto($id);

if (!$producto) {
    header('Location: listar.php');
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $precio = $_POST['precio'];
    $stock = $_POST['stock'];
    $categoria = $_POST['categoria'];

    if (actualizarProducto($id, $nombre, $descripcion, $precio, $stock, $categoria)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar el producto.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body>
    <div class="container">
        <h1>Editar Materia</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre Producto</label>
                <input type="text" name="nombre" id="nombre" value="<?php echo $producto['nombre']; ?>" required>
            </div>
            <div class="form-group">
                <label>Descripcion</label>
                <input type="text" name="descripcion" id="descripcion" value="<?php echo $producto['descripcion']; ?>" required>
            </div>
            <div class="form-group">
                <label>Precio</label>
                <input type="number" name="precio" id="precio" value="<?php echo $producto['precio']; ?>" step="0.01" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="number" name="stock" id="stock" value="<?php echo $producto['stock']; ?>" required>
            </div>
            <div class="form-group">
                <label>Categoria</label>
                <input type="text" name="categoria" id="categoria" value="<?php echo $producto['categoria']; ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>