<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cursos</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Cursos Disponibles</h1>
        <a href="crear.php" class="btn btn-success">Nuevo Curso</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Horario</th>
                <th>Cupo Máximo</th>
                <th>Estado</th>
            </tr>
            <?php
            $result = listarCursos();
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['id_curso']}</td>
                        <td>{$row['nombre']}</td>
                        <td>{$row['descripcion']}</td>
                        <td>{$row['horario']}</td>
                        <td>{$row['cupo_maximo']}</td>
                        <td>{$row['estado']}</td>
                        <td>
                            <a href='editar.php?id={$row['id_curso']}' class='btn btn-warning'>Editar</a>
                            <a href='eliminar.php?id={$row['id_curso']}' class='btn btn-danger'>Eliminar</a>
                        </td>
                    </tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>
