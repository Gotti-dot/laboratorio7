<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Materias</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Materias Disponibles</h1>
        <a href="crear.php" class="btn btn-success">Nueva Materia</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Código</th>
                <th>Horas</th>
                <th>Acciones</th>
            </tr>
            <?php
            $result = listarMaterias();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_materia']}</td>
                        <td>{$row['nombre_materia']}</td>
                        <td>{$row['codigo_materia']}</td>
                        <td>{$row['horas']}</td>
                        <td>
                            <a href='editar.php?id={$row['id_materia']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$row['id_materia']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
