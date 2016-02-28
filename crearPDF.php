<?php
//define('FPDF_FONTPATH','lib/fpdf17/font/');
require_once ('pdf.php');

$pdf = new pdf('L','mm','Legal');// instancia

$pdf->AddPage();
$pdf->SetFont('Courier','B',16);
$pdf->Cell(40,10,'¡Hola, Mundo!');
$pdf->Output();


?>