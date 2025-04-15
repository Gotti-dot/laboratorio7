
<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';


// Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);


// Título
$pdf->Cell(0, 10, 'Reporte de Matriculas por Materia', 0, 1, 'C');
$pdf->Ln(10);


// En pdf_matriculas_por_materia.php
$pdf->SetFillColor(232, 232, 232); // Color de fondo gris
$pdf->SetTextColor(0, 0, 0); // Color de texto negro
$pdf->SetDrawColor(50, 50, 50); // Color del borde
$pdf->SetLineWidth(0.3); // Ancho de línea


// Cabecera con color
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(100, 10, 'Materia', 1, 0, 'C', true);
$pdf->Cell(50, 10, 'Total Matriculados', 1, 1, 'C', true);


// Datos
$pdf->SetFont('Arial', '', 12);
$sql = "SELECT c.nombre_materia, COUNT(m.id_matricula) AS total
        FROM materias c
        LEFT JOIN matriculas m ON c.id_materia = m.id_materia
        GROUP BY c.id_materia";
$result = $conn->query($sql);


while ($row = $result->fetch_assoc()) {
    $pdf->Cell(100, 10, $row['nombre_materia'], 1, 0);
    $pdf->Cell(50, 10, $row['total'], 1, 1, 'C');
}


// Pie de página
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Generado el ' . date('d/m/Y'), 0, 0, 'C');


// Salida
$pdf->Output('D', 'reporte_matriculas_por_materia.pdf'); // 'D' para descarga forzada
?>
