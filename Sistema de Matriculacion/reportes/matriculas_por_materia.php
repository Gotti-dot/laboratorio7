<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Reporte de Matrículas por Materia</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Matrículas por Materia</h1>
        <a href="pdf_matriculas_por_materia.php" class="btn btn-danger">Descargar PDF</a>
        <table>
            <tr>
                <th>Materia</th>
                <th>Estudiantes Matriculados</th>
            </tr>
            <?php
            $sql = "SELECT c.nombre_materia, COUNT(m.id_matricula) AS total
                    FROM materias c
                    LEFT JOIN matriculas m ON c.id_materia = m.id_materia
                    GROUP BY c.id_materia";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['nombre_materia']}</td>
                        <td>{$row['total']}</td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
