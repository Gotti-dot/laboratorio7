<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';


// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);


// Título
$pdf->Cell(0, 10, 'Estudiantes Matriculados por Materia', 0, 1, 'C');
$pdf->Ln(10);


// Consulta SQL
$sql = "SELECT c.nombre_materia, e.nombre, e.apellido
        FROM matriculas m
        JOIN estudiantes e ON m.id_estudiante = e.id_estudiante
        JOIN materias c ON m.id_materia = c.id_materia
        ORDER BY c.nombre_materia";
$result = $conn->query($sql);


$current_materia = '';
while ($row = $result->fetch_assoc()) {
    if ($current_materia != $row['nombre_materia']) {
        // Nuevo materia
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, $row['nombre_materia'], 0, 1);
        $pdf->SetFont('Arial', '', 12);
        $current_materia = $row['nombre_materia'];
    }
    $pdf->Cell(0, 10, " - {$row['nombre']} {$row['apellido']}", 0, 1);
}


// Pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');


// Salida
$pdf->Output('D', 'reporte_estudiantes_por_materia.pdf');
?>
