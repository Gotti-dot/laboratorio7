<?php
include '../includes/funciones.php'; // Incluye tus funciones y la conexión a la base de datos

// Verificar si se recibe el ID de la venta a eliminar
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id_venta = $_GET['id']; // Captura el ID de la venta desde la URL

    // Llamar a la función para eliminar la venta
    if (eliminarVenta($id_venta)) {
        // Redirigir a la página principal con un mensaje de éxito
        header("Location: listar.php?mensaje=Venta eliminada con éxito");
        exit();
    } else {
        // Si ocurre un error, muestra un mensaje
        $error = "Error al intentar eliminar la venta.";
    }
} else {
    // Si no se pasa un ID válido, redirige con un mensaje de error
    header("Location: listar.php?mensaje=ID no válido");
    exit();
}
