<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Inscripciones por Curso</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Inscripciones por Curso</h1>
        <a href="pdf_inscripciones_por_curso.php" class="btn btn-danger">Descargar PDF</a>
        <table>
            <tr>
                <th>Curso</th>
                <th>Estudiantes Inscritos</th>
            </tr>
            <?php
            $sql = "SELECT c.nombre, COUNT(i.id_inscripcion) AS total
                    FROM cursos c
                    LEFT JOIN inscripciones i ON c.id_curso = i.id_curso
                    GROUP BY c.id_curso";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre']}</td>
                        <td>{$row['total']}</td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>

