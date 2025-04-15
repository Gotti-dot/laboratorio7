<?php
include '../includes/funciones.php';


if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}


$id = $_GET['id'];
$estudiante = obtenerEstudiante($id);


if (!$estudiante) {
    header("Location: listar.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fecha_nacimiento = $_POST['fecha_nacimiento'];
   
    if (actualizarEstudiante($id, $nombre, $apellido, $email, $fecha_nacimiento)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar el estudiante";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Estudiante</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Editar Estudiante</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre:</label>
                <input type="text" name="nombre" value="<?= $estudiante['nombre'] ?>" required>
            </div>
            <div class="form-group">
                <label>Apellido:</label>
                <input type="text" name="apellido" value="<?= $estudiante['apellido'] ?>" required>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="<?= $estudiante['email'] ?>" required>
            </div>
            <div class="form-group">
                <label>Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" value="<?= $estudiante['fecha_nacimiento'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
