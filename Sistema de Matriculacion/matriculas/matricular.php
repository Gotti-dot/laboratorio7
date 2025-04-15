<?php
include '../includes/funciones.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_estudiante = $_POST['id_estudiante'];
    $id_materia = $_POST['id_materia'];
   
    if (matricularEstudiante($id_estudiante, $id_materia)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al registrar la matrícula";
    }
}


$estudiantes = listarEstudiantes();
$materias = listarMaterias();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Matrícula</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Registrar Matrícula</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Estudiante:</label>
                <select name="id_estudiante" required>
                    <option value="">Seleccione un estudiante</option>
                    <?php while ($estudiante = $estudiantes->fetch_assoc()): ?>
                        <option value="<?= $estudiante['id_estudiante'] ?>">
                            <?= $estudiante['nombre'] ?> <?= $estudiante['apellido'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Materia:</label>
                <select name="id_materia" required>
                    <option value="">Seleccione una Materia</option>
                    <?php while ($materia = $materias->fetch_assoc()): ?>
                        <option value="<?= $materia['id_materia'] ?>">
                            <?= $materia['nombre_materia'] ?> (<?= $materia['codigo_materia'] ?>)
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>
