<?php
include '../includes/funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_estudiante = $_POST['id_estudiante'];
    $id_curso = $_POST['id_curso'];
    $fecha_inscripcion = date('Y-m-d');
    $estado = 'activa';
   
    if (crearInscripcion($id_estudiante, $id_curso, $fecha_inscripcion, $estado)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al registrar la inscripción";
    }
}

$estudiantes = listarEstudiantes();
$cursos = listarCursos();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Inscripción</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Registrar Inscripción</h1>
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
                <label>Curso:</label>
                <select name="id_curso" required>
                    <option value="">Seleccione un curso</option>
                    <?php while ($curso = $cursos->fetch_assoc()): ?>
                        <option value="<?= $curso['id_curso'] ?>">
                            <?= $curso['nombre'] ?> (<?= $curso['horario'] ?>)
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
