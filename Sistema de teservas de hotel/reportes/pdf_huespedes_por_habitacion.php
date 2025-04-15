<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';

// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Título
$pdf->Cell(0, 10, 'Reservas por Habitaciones', 0, 1, 'C');
$pdf->Ln(10);

// Consulta SQL
$sql = "SELECT h.numero AS numero_habitacion, p.nombre, p.apellido
        FROM reservas r
        JOIN huespedes p ON r.id_huesped = p.id_huesped
        JOIN habitaciones h ON r.id_habitacion = h.id_habitacion
        ORDER BY h.numero";
$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

$current_habitacion = '';
while ($row = $result->fetch_assoc()) {
    if ($current_habitacion != $row['numero_habitacion']) {
        // Nueva habitación
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, "Habitación {$row['numero_habitacion']}", 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $current_habitacion = $row['numero_habitacion'];
    }
    $pdf->Cell(0, 10, " - {$row['nombre']} {$row['apellido']}", 0, 1);
}

// Pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');

// Salida
$pdf->Output('D', 'reporte_reservas_por_habitacion.pdf');
?>