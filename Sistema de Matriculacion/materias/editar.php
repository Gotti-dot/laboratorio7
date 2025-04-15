<?php
include '../includes/funciones.php';


if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}


$id = $_GET['id'];
$materia = obtenerMateria($id);


if (!$materia) {
    header("Location: listar.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre_materia = $_POST['nombre_materia'];
    $codigo_materia = $_POST['codigo_materia'];
    $horas = $_POST['horas'];
   
    if (actualizarMateria($id, $nombre_materia, $codigo_materia, $horas)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al actualizar el Materia";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Mataria</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Editar Mataria</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Nombre del Mataria:</label>
                <input type="text" name="nombre_materia" value="<?= $materia['nombre_materia'] ?>" required>
            </div>
            <div class="form-group">
                <label>Código del Mataria:</label>
                <input type="text" name="codigo_materia" value="<?= $materia['codigo_materia'] ?>" required>
            </div>
            <div class="form-group">
                <label>Horas:</label>
                <input type="number" name="horas" value="<?= $materia['horas'] ?>" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
