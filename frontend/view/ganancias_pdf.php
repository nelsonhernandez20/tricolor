<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/ganancias.php");


$ganancias_obj = new ganancias;
$ganancias_obj->pointer = $ganancias_obj->read_gan_one($_POST['cod_gan']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if($data = $ganancias_obj->data_box()){
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos de las ganancias',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Fecha : '.$data['fec_gan']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Ganancias : '.$data['din_gan']);
	$pdf->Ln(10);

}

$pdf->Output();


?>