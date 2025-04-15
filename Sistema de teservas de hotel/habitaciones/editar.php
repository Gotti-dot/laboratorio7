<?php
include '../includes/funciones.php';

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}

$id = $_GET['id'];
$habitacion = obtenerHabitacion($id);

if (!$habitacion) {
    header("Location: listar.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    $tipo = $_POST['tipo'];
    $precio_noche = $_POST['precio_noche'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    if (actualizarHabitacion($id, $numero, $tipo, $precio_noche, $descripcion, $estado)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar la habitación";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Habitación</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Editar Habitación</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Número:</label>
                <input type="text" name="numero" value="<?= $habitacion['numero'] ?>" required>
            </div>
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo" required>
                    <option value="individual" <?= $habitacion['tipo'] == 'individual' ? 'selected' : '' ?>>Individual</option>
                    <option value="doble" <?= $habitacion['tipo'] == 'doble' ? 'selected' : '' ?>>Doble</option>
                    <option value="suite" <?= $habitacion['tipo'] == 'suite' ? 'selected' : '' ?>>Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label>Precio por Noche:</label>
                <input type="number" step="0.01" name="precio_noche" value="<?= $habitacion['precio_noche'] ?>" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion"><?= $habitacion['descripcion'] ?></textarea>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="estado">
                    <option value="disponible" <?= $habitacion['estado'] == 'disponible' ? 'selected' : '' ?>>Disponible</option>
                    <option value="ocupada" <?= $habitacion['estado'] == 'ocupada' ? 'selected' : '' ?>>Ocupada</option>
                    <option value="mantenimiento" <?= $habitacion['estado'] == 'mantenimiento' ? 'selected' : '' ?>>Mantenimiento</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>