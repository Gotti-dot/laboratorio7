<?php
include "../includes/funciones.php";

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}
$id = $_GET['id'];
$cliente = obtenerCliente($id);
if (!$cliente) {
    header("Location: listar.php");
    exit();
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    if (actualizarCliente($id, $nombre, $apellido, $email, $telefono, $direccion)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar el cliente.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
    <?php include '../menu.php'; ?>
    <h1>Editar CLiente</h1>
    <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
    <form method="POST">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="<?= $cliente['nombre']?>" required>
            </div>
            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" value="<?= $cliente['apellido']?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" name="email" value="<?= $cliente['email']?>" required>
            </div>
            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" value="<?= $cliente['telefono']?>" required>
            </div>
            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" value="<?= $cliente['direccion']?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>