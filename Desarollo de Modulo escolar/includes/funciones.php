<?php
include 'conexion.php';

function listarEstudiantes() {
    global $conn;
    $sql = "SELECT * FROM estudiantes";
    return $conn->query($sql);
}

function obtenerEstudiante($id) {
    global $conn;
    $sql = "SELECT * FROM estudiantes WHERE id_estudiante = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function crearEstudiante($nombre, $apellido, $fecha_nacimiento, $direccion, $telefono) {
    global $conn;
    $sql = "INSERT INTO estudiantes (nombre, apellido, fecha_nacimiento, direccion, telefono) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono);
    return $stmt->execute();
}

function actualizarEstudiante($id, $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono) {
    global $conn;
    $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, fecha_nacimiento = ?, direccion = ?, telefono = ? WHERE id_estudiante = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $nombre, $apellido, $fecha_nacimiento, $direccion, $telefono, $id);
    return $stmt->execute();
}

function eliminarEstudiante($id) {
    global $conn;
    $sql = "DELETE FROM estudiantes WHERE id_estudiante = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

// Función para listar cursos
function listarCursos() {
    global $conn;
    $sql = "SELECT * FROM cursos";
    return $conn->query($sql);
}

function obtenerCurso($id) {
    global $conn;
    $sql = "SELECT * FROM cursos WHERE id_curso = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    return $stmt->get_result()->fetch_assoc();
}

function crearCurso($nombre, $descripcion, $horario, $cupo_maximo, $estado = 'activo') {
    global $conn;
    $sql = "INSERT INTO cursos (nombre, descripcion, horario, cupo_maximo, estado) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssis", $nombre, $descripcion, $horario, $cupo_maximo, $estado);
    return $stmt->execute();
}

function actualizarCurso($id, $nombre, $descripcion, $horario, $cupo_maximo, $estado) {
    global $conn;
    $sql = "UPDATE cursos SET nombre = ?, descripcion = ?, horario = ?, cupo_maximo = ?, estado = ? WHERE id_curso = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssisi", $nombre, $descripcion, $horario, $cupo_maximo, $estado, $id);
    return $stmt->execute();
}

function eliminarCurso($id) {
    global $conn;
    $sql = "DELETE FROM cursos WHERE id_curso = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

include 'conexion.php';

// Función para crear una nueva inscripción
function crearInscripcion($id_estudiante, $id_curso, $fecha_inscripcion, $estado = 'activa') {
    global $conn;
    $sql = "INSERT INTO inscripciones (id_estudiante, id_curso, fecha_inscripcion, estado) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiss", $id_estudiante, $id_curso, $fecha_inscripcion, $estado);
    return $stmt->execute();
}

function listarInscripciones() {
    global $conn;
    $sql = "SELECT i.id_inscripcion, e.nombre, e.apellido, c.nombre AS curso_nombre, i.fecha_inscripcion, i.estado
            FROM inscripciones i
            JOIN estudiantes e ON i.id_estudiante = e.id_estudiante
            JOIN cursos c ON i.id_curso = c.id_curso";
    return $conn->query($sql);
}

function eliminarInscripcion($id) {
    global $conn;
    $sql = "DELETE FROM inscripciones WHERE id_inscripcion = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>

