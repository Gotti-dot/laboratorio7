<?php
include '../includes/funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $numero = $_POST['numero'];
    $tipo = $_POST['tipo'];
    $precio_noche = $_POST['precio_noche'];
    $descripcion = $_POST['descripcion'];
    $estado = $_POST['estado'];

    if (crearHabitaciones($numero, $tipo, $precio_noche, $descripcion, $estado)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al crear la habitación";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Habitación</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Nueva Habitación</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Número:</label>
                <input type="text" name="numero" required>
            </div>
            <div class="form-group">
                <label>Tipo:</label>
                <select name="tipo" required>
                    <option value="individual">Individual</option>
                    <option value="doble">Doble</option>
                    <option value="suite">Suite</option>
                </select>
            </div>
            <div class="form-group">
                <label>Precio por noche:</label>
                <input type="number" step="0.01" name="precio_noche" required>
            </div>
            <div class="form-group">
                <label>Descripción:</label>
                <textarea name="descripcion"></textarea>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="estado">
                    <option value="disponible" selected>Disponible</option>
                    <option value="ocupada">Ocupada</option>
                    <option value="mantenimiento">Mantenimiento</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>