
<?php
include 'conexion.php';


// Funciones para Huéspedes
function listarEstudiantes() {
    global $conn;
    $sql = "SELECT * FROM estudiantes";
    return $conn->query($sql);
   }
   function obtenerEstudiante($id) {
    global $conn;
    $sql = "SELECT * FROM estudiantes WHERE id_estudiante = $id";
    return $conn->query($sql)->fetch_assoc();
   }
   function crearEstudiante($nombre, $apellido, $email, $fecha_nacimiento) {
    global $conn;
    $sql = "INSERT INTO estudiantes (nombre, apellido, email, fecha_nacimiento)
   VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $nombre, $apellido, $email, $fecha_nacimiento);
    return $stmt->execute();
    
    function actualizarEstudiante($id, $nombre, $apellido, $email, $fecha_nacimiento) {
        global $conn;
        $sql = "UPDATE estudiantes SET nombre = ?, apellido = ?, email = ?,
       fecha_nacimiento = ? WHERE id_estudiante = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $nombre, $apellido, $email, $fecha_nacimiento, $id);
        return $stmt->execute();
       }
       function eliminarEstudiante($id) {
        global $conn;
        $sql = "DELETE FROM estudiantes WHERE id_estudiante = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id);
        return $stmt->execute();
       }
    }

// Funciones para Materias
function listarMaterias() {
    global $conn;
    $sql = "SELECT * FROM materias";
    return $conn->query($sql);
}


function obtenerMateria($id) {
    global $conn;
    $sql = "SELECT * FROM materias WHERE id_materia = $id";
    return $conn->query($sql)->fetch_assoc();
}


function crearMateria($nombre_materia, $codigo_materia, $horas) {
    global $conn;
    $sql = "INSERT INTO materias (nombre_materia, codigo_materia, horas) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssi", $nombre_materia, $codigo_materia, $horas);
    return $stmt->execute();
}


function actualizarMateria($id, $nombre_materia, $codigo_materia, $horas) {
    global $conn;
    $sql = "UPDATE materias SET nombre_materia = ?, codigo_materia = ?, horas = ? WHERE id_materia = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssii", $nombre_materia, $codigo_materia, $horas, $id);
    return $stmt->execute();
}


function eliminarMateria($id) {
    global $conn;
    $sql = "DELETE FROM materias WHERE id_materia = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}


// Funciones para Matrículas
function matricularEstudiante($id_estudiante, $id_materia) {
    global $conn;
    $sql = "INSERT INTO matriculas (id_estudiante, id_materia) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $id_estudiante, $id_materia);
    return $stmt->execute();
}


function listarMatriculas() {
    global $conn;
    $sql = "SELECT m.id_matricula, e.nombre, e.apellido, c.nombre_materia, m.fecha_matricula
            FROM matriculas m
            JOIN estudiantes e ON m.id_estudiante = e.id_estudiante
            JOIN materias c ON m.id_materia = c.id_materia";
    return $conn->query($sql);
}


function eliminarMatricula($id) {
    global $conn;
    $sql = "DELETE FROM matriculas WHERE id_matricula = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}
?>
