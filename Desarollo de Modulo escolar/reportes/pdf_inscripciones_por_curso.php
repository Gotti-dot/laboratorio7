<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Reporte de Inscripciones por Curso', 0, 1, 'C');
$pdf->Ln(10);

$pdf->SetFillColor(232, 232, 232);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 50);
$pdf->SetLineWidth(0.3);

$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'Curso', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Total Inscritos', 1, 1, 'C', true);

$sql = "SELECT c.nombre, COUNT(i.id_inscripcion) AS total
        FROM cursos c
        LEFT JOIN inscripciones i ON c.id_curso = i.id_curso
        GROUP BY c.id_curso";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
    $pdf->Cell(100, 10, $row['nombre'], 1, 0);
    $pdf->Cell(50, 10, $row['total'], 1, 1, 'C');
}

$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');

$pdf->Output('D', 'reporte_inscripciones_por_curso.pdf');
?>
