<?php
include 'conexion.php';

// Funciones para Huespedes
function listarHuespedes() {
    global $conn;
    $sql = "SELECT * FROM huespedes";
    return $conn->query($sql);
}

function obtenerHuespedes($id) {
    global $conn;
    $sql = "SELECT * FROM huespedes WHERE id_huesped = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function crearHuesped($nombre, $apellido, $documento, $nacionalidad, $telefono, $email) {
    global $conn;
    $sql = "INSERT INTO huespedes (nombre, apellido, documento, nacionalidad, telefono, email) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $nombre, $apellido, $documento, $nacionalidad, $telefono, $email);
    return $stmt->execute();
}

function actualizarHuesped($id, $nombre, $apellido, $documento, $nacionalidad, $telefono, $email) {
    global $conn;
    $sql = "UPDATE huespedes SET nombre = ?, apellido = ?, documento = ?, nacionalidad = ?, telefono = ?, email = ? WHERE id_huesped = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssi", $nombre, $apellido, $documento, $nacionalidad, $telefono, $email, $id);
    return $stmt->execute();
}

function eliminarHuesped($id) {
    global $conn;
    $sql = "DELETE FROM huespedes WHERE id_huesped = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Funciones para Habitaciones
function listarHabitaciones() {
    global $conn;
    $sql = "SELECT * FROM habitaciones";
    return $conn->query($sql);
}

function obtenerHabitacion($id) {
    global $conn;
    $sql = "SELECT * FROM habitaciones WHERE id_habitacion = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function crearHabitaciones($numero, $tipo, $precio_noche, $descripcion, $estado) {
    global $conn;
    $sql = "INSERT INTO habitaciones (numero, tipo, precio_noche, descripcion, estado) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdss", $numero, $tipo, $precio_noche, $descripcion, $estado);
    return $stmt->execute();
}

function actualizarHabitacion($id, $numero, $tipo, $precio_noche, $descripcion, $estado) {
    global $conn;
    $sql = "UPDATE habitaciones SET numero = ?, tipo = ?, precio_noche = ?, descripcion = ?, estado = ? WHERE id_habitacion = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdssi", $numero, $tipo, $precio_noche, $descripcion, $estado, $id);
    return $stmt->execute();
}

function eliminarHabitacion($id) {
    global $conn;
    $sql = "DELETE FROM habitaciones WHERE id_habitacion = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Funciones para Reservas
function reservarHabitacion($id_huesped, $id_habitacion, $fecha_entrada, $fecha_salida, $estado, $total) {
    global $conn;
    $sql = "INSERT INTO reservas (id_huesped, id_habitacion, fecha_entrada, fecha_salida, estado, total) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iisssd", $id_huesped, $id_habitacion, $fecha_entrada, $fecha_salida, $estado, $total);
    return $stmt->execute();
}

function listarReservas() {
    global $conn;
    $sql = "SELECT r.id_reserva, h.nombre, h.apellido, hb.numero, r.fecha_entrada, r.fecha_salida, r.estado, r.total
            FROM reservas r
            JOIN huespedes h ON r.id_huesped = h.id_huesped
            JOIN habitaciones hb ON r.id_habitacion = hb.id_habitacion";
    return $conn->query($sql);
}

function eliminarReserva($id) {
    global $conn;
    $sql = "DELETE FROM reservas WHERE id_reserva = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}