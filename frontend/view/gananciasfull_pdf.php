<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/ganancias.php");


$ganancias_obj = new ganancias;
$ganancias_obj->pointer = $ganancias_obj->read_gan($_POST['cod_gan']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$ganancias_obj->pointer = $ganancias_obj->read_gan();
$data = $ganancias_obj->data_box();

$pdf->Cell(100,10,'Datos de la ganancia',0,0,'C',0);
for ($i=0; $i <$data['cod_gan'] ; $i++) { 
	// code...

	// code...

if($data = $ganancias_obj->data_box()){
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Fecha : '.$data['fec_gan']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Ganancias : '.$data['din_gan']);
	$pdf->Ln(10);

}

}
$pdf->Output();



?>