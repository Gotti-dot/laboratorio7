<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php'; // Archivo con conexión y funciones

// Crear PDF con orientación horizontal
$pdf = new FPDF('L', 'mm', 'A4'); // 'L' para Landscape, tamaño A4
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Título
$pdf->Cell(0, 10, 'Reporte de Ventas', 0, 1, 'C');
$pdf->Ln(10); // Salto de línea

// Encabezado de la tabla
$pdf->SetFont('Arial', 'B', 12);
$pdf->SetFillColor(232, 232, 232); // Color de fondo para encabezado
$pdf->Cell(20, 10, 'ID', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Nombre Cliente', 1, 0, 'C', true);
$pdf->Cell(60, 10, 'Producto', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Cantidad', 1, 0, 'C', true);
$pdf->Cell(30, 10, 'Precio Unit.', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Total', 1, 0, 'C', true);
$pdf->Cell(40, 10, 'Fecha Venta', 1, 1, 'C', true); // Salto de línea al final

// Fuente para el contenido
$pdf->SetFont('Arial', '', 12);

// Consulta SQL
$sql = "SELECT v.id_venta, c.nombre AS nombre_cliente, 
               p.nombre_producto AS producto, v.cantidad, p.precio_unitario, 
               (v.cantidad * p.precio_unitario) AS total, v.fecha_venta
        FROM ventas v
        JOIN clientes c ON v.id_cliente = c.id_cliente
        JOIN productos p ON v.id_producto = p.id_producto";

$result = listarVentas(); // Usar la función modularizada de tu archivo funciones.php

if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(20, 10, $row['id_venta'], 1);
        $pdf->Cell(50, 10, $row['nombre_cliente'], 1);
        $pdf->Cell(60, 10, $row['producto'], 1);
        $pdf->Cell(30, 10, $row['cantidad'], 1, 0, 'C');
        $pdf->Cell(30, 10, '$' . number_format($row['precio_unitario'], 2), 1, 0, 'C');
        $pdf->Cell(40, 10, '$' . number_format($row['total'], 2), 1, 0, 'C');
        $pdf->Cell(40, 10, $row['fecha_venta'], 1, 1, 'C'); // Salto de línea
    }
} else {
    $pdf->Cell(0, 10, 'No se encontraron ventas.', 1, 1, 'C');
}

// Pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Página ' . $pdf->PageNo(), 0, 0, 'C');

// Salida del PDF
$pdf->Output('D', 'ventas.pdf'); // Descargar PDF directamente
?>
