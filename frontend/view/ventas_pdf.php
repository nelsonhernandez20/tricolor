<?php 

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/ventas.php");

$ventas = new ventas;

$ventas->pointer= $ventas->read_ventas_one($_POST['id_ven']);



$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


if ($data = $ventas->data_box()) {
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos del producto',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre del Cliente : '.$data['nom_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Nombre del producto : '.$data['nom_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cantidad  del producto : '.$data['num_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cantidad total del precio del producto : '.$data['din_gan']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Precio del producto : '.$data['pre_pro']);
	$pdf->Ln(10);
}

$pdf->Output();

 ?>