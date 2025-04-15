<?php 
include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Inscripciones</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Inscripciones Registradas</h1>
        <a href="inscripciones.php" class="btn btn-success">Nueva Inscripción</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Curso</th>
                <th>Fecha de Inscripción</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarInscripciones();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_inscripcion']}</td>
                        <td>{$row['nombre']} {$row['apellido']}</td>
                        <td>{$row['curso_nombre']}</td>
                        <td>{$row['fecha_inscripcion']}</td>
                        <td>{$row['estado']}</td>
                        <td>
                            <a href='eliminar.php?id={$row['id_inscripcion']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>