<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes por Curso</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Estudiantes Matriculados por Curso</h1>
        <a href="pdf_estudiantes_por_curso.php" class="btn btn-danger">Descargar PDF</a>
        <?php
        $sql = "SELECT c.nombre, e.nombre AS nombre_estudiante, e.apellido
                FROM inscripciones i
                JOIN estudiantes e ON i.id_estudiante = e.id_estudiante
                JOIN cursos c ON i.id_curso = c.id_curso
                ORDER BY c.nombre";
        $result = $conn->query($sql);

        $current_curso = "";
        while ($row = $result->fetch_assoc()) {
            if ($current_curso != $row['nombre']) {
                if ($current_curso != "") echo "</ul>";
                echo "<h2>{$row['nombre']}</h2><ul>";
                $current_curso = $row['nombre'];
            }
            echo "<li>{$row['nombre_estudiante']} {$row['apellido']}</li>";
        }
        if ($current_curso != "") echo "</ul>";
        ?>
    </div>
</body>
</html>

