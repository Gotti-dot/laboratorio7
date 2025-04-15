<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

$pdf->Cell(0, 10, 'Estudiantes Matriculados por Curso', 0, 1, 'C');
$pdf->Ln(10);

$sql = "SELECT c.nombre, e.nombre AS nombre_estudiante, e.apellido
        FROM inscripciones i
        JOIN estudiantes e ON i.id_estudiante = e.id_estudiante
        JOIN cursos c ON i.id_curso = c.id_curso
        ORDER BY c.nombre";
$result = $conn->query($sql);

$current_curso = '';
while ($row = $result->fetch_assoc()) {
    if ($current_curso != $row['nombre']) {
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, $row['nombre'], 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $current_curso = $row['nombre'];
    }
    $pdf->Cell(0, 10, " - {$row['nombre_estudiante']} {$row['apellido']}", 0, 1);
}

$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');

$pdf->Output('D', 'reporte_estudiantes_por_curso.pdf');
?>
