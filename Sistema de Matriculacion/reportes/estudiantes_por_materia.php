<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes por Materias</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Estudiantes Matriculados por Materias</h1>
        <a href="pdf_estudiantes_por_materia.php" class="btn btn-danger">Descargar PDF</a>
        <?php
        $sql = "SELECT c.nombre_materia, e.nombre, e.apellido
                FROM matriculas m
                JOIN estudiantes e ON m.id_estudiante = e.id_estudiante
                JOIN materias c ON m.id_materia = c.id_materia
                ORDER BY c.nombre_materia";
        $result = $conn->query($sql);
       
        $current_materia = "";
        while ($row = $result->fetch_assoc()) {
            if ($current_materia != $row['nombre_materia']) {
                if ($current_materia != "") echo "</ul>";
                echo "<h2>{$row['nombre_materia']}</h2><ul>";
                $current_materia = $row['nombre_materia'];
            }
            echo "<li>{$row['nombre']} {$row['apellido']}</li>";
        }
        if ($current_materia != "") echo "</ul>";
        ?>
    </div>
</body>
</html>
