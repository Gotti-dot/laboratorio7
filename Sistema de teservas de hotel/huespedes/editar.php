<?php
include '../includes/funciones.php';

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}

$id = $_GET['id'];
$huesped = obtenerHuespedes($id); // Se asume que la función está definida en funciones.php

if (!$huesped) {
    header("Location: listar.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $documento = $_POST['documento'];
    $nacionalidad = $_POST['nacionalidad'];
    $telefono = $_POST['telefono'];
    $email = $_POST['email'];

    if (actualizarHuesped($id, $nombre, $apellido, $documento, $nacionalidad, $telefono, $email)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar el huésped";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Huésped</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Editar Huésped</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?= $huesped['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" name="apellido" value="<?= $huesped['apellido'] ?>" required>
            </div>
            <div class="form-group">
                <label>Documento:</label>
                <input type="text" name="documento" value="<?= $huesped['documento'] ?>" required>
            </div>
            <div class="form-group">
                <label>Nacionalidad:</label>
                <input type="text" name="nacionalidad" value="<?= $huesped['nacionalidad'] ?>">
            </div>
            <div class="form-group">
                <label>Teléfono:</label>
                <input type="text" name="telefono" value="<?= $huesped['telefono'] ?>">
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="<?= $huesped['email'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>