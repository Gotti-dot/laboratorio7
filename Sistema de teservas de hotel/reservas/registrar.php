<?php
include '../includes/funciones.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id_huesped = $_POST['id_huesped'];
    $id_habitacion = $_POST['id_habitacion'];
    $fecha_entrada = $_POST['fecha_entrada'];
    $fecha_salida = $_POST['fecha_salida'];
    $estado = $_POST['estado'];
    $total = $_POST['total'];

    if (reservarHabitacion($id_huesped, $id_habitacion, $fecha_entrada, $fecha_salida, $estado, $total)) {
        header("Location: listar.php");
        exit();
    } else {
        $error = "Error al registrar la reserva";
    }
}

$huespedes = listarHuespedes();
$habitaciones = listarHabitaciones();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nueva Reserva</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <div class="container">
        <?php include '../menu.php'; ?>
        <h1>Registrar Reserva</h1>
        <?php if (isset($error)) echo "<p style='color:red'>$error</p>"; ?>
        <form method="POST">
            <div class="form-group">
                <label>Huésped:</label>
                <select name="id_huesped" required>
                    <option value="">Seleccione un huésped</option>
                    <?php while ($huesped = $huespedes->fetch_assoc()): ?>
                        <option value="<?= $huesped['id_huesped'] ?>">
                            <?= $huesped['nombre'] ?> <?= $huesped['apellido'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Habitación:</label>
                <select name="id_habitacion" required>
                    <option value="">Seleccione una habitación</option>
                    <?php while ($habitacion = $habitaciones->fetch_assoc()): ?>
                        <option value="<?= $habitacion['id_habitacion'] ?>">
                            <?= $habitacion['numero'] ?> - <?= $habitacion['tipo'] ?>
                        </option>
                    <?php endwhile; ?>
                </select>
            </div>
            <div class="form-group">
                <label>Fecha de entrada:</label>
                <input type="date" name="fecha_entrada" required>
            </div>
            <div class="form-group">
                <label>Fecha de salida:</label>
                <input type="date" name="fecha_salida" required>
            </div>
            <div class="form-group">
                <label>Estado:</label>
                <select name="estado" required>
                    <option value="confirmada">Confirmada</option>
                    <option value="cancelada">Cancelada</option>
                    <option value="finalizada">Finalizada</option>
                </select>
            </div>
            <div class="form-group">
                <label>Total:</label>
                <input type="number" name="total" step="0.01" required>
            </div>
            <button type="submit" class="btn btn-success">Registrar</button>
            <a href="listar.php" class="btn">Cancelar</a>
        </form>
    </div>
</body>
</html>