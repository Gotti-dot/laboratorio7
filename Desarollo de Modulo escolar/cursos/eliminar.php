<?php
include '../includes/funciones.php';

if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}

$id = $_GET['id'];

if (eliminarCurso($id)) {
    header("Location: listar.php");
    exit();
} else {
    die("Error al eliminar el Curso");
}
?>
