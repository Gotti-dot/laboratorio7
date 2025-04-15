<?php include '../includes/funciones.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="container">
    <?php include '../menu.php'; ?>
    <h1>Clientes</h1>
    <a href="pdf_clientes.php" class="btn btn-danger">Descargar PDF</a>
    <?php
    $sql = "SELECT * FROM clientes";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "<table border='1' cellpadding='5' cellspacing='0'>";
        echo "<tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Teléfono</th>
              </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['id_cliente']}</td>
                    <td>{$row['nombre']}</td>
                    <td>{$row['apellido']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['telefono']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No hay clientes registrados.";
    }
    
    ?>
    </div>
</body>
</html>