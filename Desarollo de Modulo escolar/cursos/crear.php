<?php
include '../includes/funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $horario = $_POST['horario'];
    $cupo_maximo = $_POST['cupo_maximo'];
    $estado = $_POST['estado'];
   
    if (crearCurso($nombre, $descripcion, $horario, $cupo_maximo, $estado)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al crear el Curso";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Curso</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Nuevo Curso</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre del Curso:</label>
                <input type="text" name="nombre" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion" required></textarea>
            </div>
            <div class="form-group">
                <label>Horario:</label>
                <input type="text" name="horario" required>
            </div>
            <div class="form-group">
                <label>Cupo Máximo:</label>
                <input type="number" name="cupo_maximo" required>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="estado">
                    <option value="activo">Activo</option>
                    <option value="inactivo">Inactivo</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
