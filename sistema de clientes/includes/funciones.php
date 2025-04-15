<?php
include "conexion.php";

// Funciones para clientes
function listarClientes() {
    global $conn;
    $sql = "SELECT * FROM clientes";
    return $conn->query($sql);
}

function obtenerCliente($id) {
    global $conn;
    $sql = "SELECT * FROM clientes WHERE id_cliente = $id";
    return $conn->query($sql)->fetch_assoc();
}

function crearCliente($nombre, $apellido, $email, $telefono, $direccion) {
    global $conn;
    $sql = "INSERT INTO clientes (nombre, apellido, email, telefono, direccion) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $nombre, $apellido, $email, $telefono, $direccion);
    return $stmt->execute();
}

function actualizarCliente($id, $nombre, $apellido, $email, $telefono, $direccion) {
    global $conn;
    $sql = "UPDATE clientes SET nombre = ?, apellido = ?, email = ?, telefono = ?, direccion = ? WHERE id_cliente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssi", $nombre, $apellido, $email, $telefono, $direccion, $id);
    return $stmt->execute();
}
function eliminarCliente($id) {
    global $conn;
    $sql = "DELETE FROM clientes WHERE id_cliente = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

//funciones para productos
function listarProductos() {
    global $conn;
    $sql = "SELECT * FROM  productos";
    return $conn->query($sql);
}

function obtenerProducto($id) {
    global $conn;
    $sql = "SELECT * FROM productos WHERE id_producto = $id";
    return $conn->query($sql)->fetch_assoc();
}

function crearProducto($nombre, $descripcion, $precio, $stock, $categoria) {
    global $conn;
    $sql = "INSERT INTO productos (nombre, descripcion, precio, stock, categoria) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiis", $nombre, $descripcion, $precio, $stock, $categoria);
    return $stmt->execute();
} 

function actualizarProducto($id, $nombre, $descripcion, $precio, $stock, $categoria) {
    global $conn;
    $sql = "UPDATE productos SET nombre = ?, descripcion = ?, precio = ?, stock = ?, categoria = ? WHERE id_producto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiisi", $nombre, $descripcion, $precio, $stock, $categoria, $id);
    return $stmt->execute();
}

function eliminarProducto($id) {
    global $conn;
    $sql = "DELETE FROM productos WHERE id_producto = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

//funciones para ventas
function realizarVenta($id_cliente, $id_producto, $cantidad, $precio_unitario) {
    global $conn;

    // Insertar la venta en la tabla ventas
    $sql_insert = "INSERT INTO ventas (id_cliente, id_producto, cantidad, precio_unitario, fecha_venta) 
                   VALUES (?, ?, ?, ?, NOW())";
    $stmt = $conn->prepare($sql_insert);

    if (!$stmt) {
        return "Error al preparar la consulta de inserción: " . $conn->error;
    }

    // Asociar los parámetros para la inserción
    $stmt->bind_param("iiid", $id_cliente, $id_producto, $cantidad, $precio_unitario);

    // Ejecutar la consulta de inserción
    if (!$stmt->execute()) {
        return "Error al ejecutar la consulta de inserción: " . $stmt->error;
    }

    // Consulta para mostrar el detalle de la venta con INNER JOIN
    $sql_select = "
        SELECT 
            v.id_cliente,
            c.nombre AS nombre_cliente,
            v.id_producto,
            p.nombre AS nombre_producto,
            v.cantidad,
            v.precio_unitario,
            v.fecha_venta,
            (v.cantidad * v.precio_unitario) AS total
        FROM ventas v
        INNER JOIN clientes c ON v.id_cliente = c.id_cliente
        INNER JOIN productos p ON v.id_producto = p.id_producto
        WHERE v.id_cliente = ? AND v.id_producto = ?
    ";

    $stmt_select = $conn->prepare($sql_select);

    if (!$stmt_select) {
        return "Error al preparar la consulta de selección: " . $conn->error;
    }

    // Asociar los parámetros para la consulta de selección
    $stmt_select->bind_param("ii", $id_cliente, $id_producto);

    // Ejecutar la consulta y obtener el resultado
    $stmt_select->execute();
    $result = $stmt_select->get_result();

    // Recopilar los resultados
    $venta_detalle = [];
    while ($row = $result->fetch_assoc()) {
        $venta_detalle[] = $row;
    }

    return $venta_detalle; // Retornar los detalles de la venta
}


function listarVentas() {
    global $conn;

    $sql = "SELECT 
                v.id_venta,
                c.nombre AS nombre_cliente,
                c.apellido AS apellido_cliente,
                p.nombre AS producto,
                v.cantidad,
                v.precio_unitario,
                v.total,
                v.fecha_venta
            FROM ventas v
            INNER JOIN clientes c ON v.id_cliente = c.id_cliente
            INNER JOIN productos p ON v.id_producto = p.id_producto";

    $result = $conn->query($sql);

    if (!$result) {
        die("Error en la consulta SQL: " . $conn->error);
    }

    return $result;
}



function eliminarVenta($id) {
    global $conn;
    $sql = "DELETE FROM ventas WHERE id_venta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    return $stmt->execute();
}

?>