<?php
include "../includes/funciones.php";
if (!isset($_GET['id'])) {
    header("Location: listar.php");
    exit();
}
$id = $_GET['id'];
if (eliminarCliente($id)) {
    header("Location: listar.php");
    exit();
} else {
    echo "Error al eliminar el cliente.";
}
?>