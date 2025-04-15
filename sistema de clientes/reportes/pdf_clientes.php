<?php
require('../fpdf/fpdf.php');
include '../includes/funciones.php';

//Crear PDF
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);

//Titulo
$pdf->Cell(0, 10, 'Lista de Clientes', 0, 1, 'C');
$pdf->SetFont('Arial', 'I', 12);

//Consulta SQL
$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    //Encabezados de la tabla
    $pdf->Cell(20, 10, 'ID', 1);
    $pdf->Cell(40, 10, 'Nombre', 1);
    $pdf->Cell(40, 10, 'Apellido', 1);
    $pdf->Cell(50, 10, 'Email', 1);
    $pdf->Cell(30, 10, 'Teléfono', 1);
    $pdf->Ln();

    //Datos de la tabla
    while ($row = $result->fetch_assoc()) {
        $pdf->Cell(20, 10, $row['id_cliente'], 1);
        $pdf->Cell(40, 10, $row['nombre'], 1);
        $pdf->Cell(40, 10, $row['apellido'], 1);
        $pdf->Cell(50, 10, $row['email'], 1);
        $pdf->Cell(30, 10, $row['telefono'], 1);
        $pdf->Ln();
    }
} else {
    $pdf->Cell(0, 10, 'No hay clientes registrados.', 0, 1, 'C');
}

//Pie de pagina
$pdf->SetY(-15);
$pdf->SetFont('Arial', 'I', 8);
$pdf->Cell(0, 10, 'Página ' . $pdf->PageNo(), 0, 0, 'C');

//Salida
$pdf->Output('D', 'clientes.pdf'); // Descarga el PDF
?>