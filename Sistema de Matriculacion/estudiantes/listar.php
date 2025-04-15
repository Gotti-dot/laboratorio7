<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Estudiantes</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Estudiantes Registrados</h1>
        <a href="crear.php" class="btn btn-success">Nuevo Estudiante</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Fecha Nacimiento</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarEstudiantes();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_estudiante']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['apellido']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['fecha_nacimiento']}</td>
                        <td>
                            <a href='editar.php?id={$row['id_estudiante']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$row['id_estudiante']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>