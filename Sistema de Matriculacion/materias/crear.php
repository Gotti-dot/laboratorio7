<?php
include '../includes/funciones.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_materia = $_POST['nombre_materia'];
    $codigo_materia = $_POST['codigo_materia'];
    $horas = $_POST['horas'];
   
    if (crearMateria($nombre_materia, $codigo_materia, $horas)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al crear el Materia";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Materia</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Nuevo Materia</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre del Materia:</label>
                <input type="text" name="nombre_materia" required>
            </div>
            <div class="form-group">
                <label>Código del Materia:</label>
                <input type="text" name="codigo_materia" required>
            </div>
            <div class="form-group">
                <label>Horas:</label>
                <input type="number" name="horas" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
