<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Matrículas</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Matrículas Registradas</h1>
        <a href="matricular.php" class="btn btn-success">Nueva Matrícula</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Estudiante</th>
                <th>Materias</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarMatriculas();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_matricula']}</td>
                        <td>{$row['nombre']} {$row['apellido']}</td>
                        <td>{$row['nombre_materia']}</td>
                        <td>{$row['fecha_matricula']}</td>
                        <td>
                            <a href='eliminar.php?id={$row['id_matricula']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
