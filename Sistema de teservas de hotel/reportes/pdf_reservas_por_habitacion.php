<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';

// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

// Título
$pdf->Cell(0, 10, 'Reporte de Reservas por Habitaciones', 0, 1, 'C');
$pdf->Ln(10);

// Estilos de la cabecera
$pdf->SetFillColor(232, 232, 232);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 50);
$pdf->SetLineWidth(0.3);

// Cabecera con color
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'Habitación', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Total Reservas', 1, 1, 'C', true);

// Datos
$pdf->SetFont('Arial', '', 12);
$sql = "SELECT h.numero AS numero_habitacion, COUNT(r.id_reserva) AS total
        FROM habitaciones h
        LEFT JOIN reservas r ON h.id_habitacion = r.id_habitacion
        WHERE r.estado = 'confirmada'
        GROUP BY h.id_habitacion";
$result = $conn->query($sql);

if (!$result) {
    die("Error en la consulta: " . $conn->error);
}

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(100, 10, "Habitación {$row['numero_habitacion']}", 1, 0);
    $pdf->Cell(50, 10, $row['total'], 1, 1, 'C');
}

// Pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');

// Salida
$pdf->Output('D', 'reporte_reservas_por_habitacion.pdf'); // 'D' para descarga forzada
?>