<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/soporte.php");


$soporte_obj = new soporte;
$soporte_obj->pointer = $soporte_obj->read_sop($_POST['cod_sop']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$soporte_obj->pointer = $soporte_obj->read_sop();
$data = $soporte_obj->data_box();

$pdf->Cell(100,10,'Datos del cliente',0,0,'C',0);
for ($i=0; $i <$data['cod_sop'] ; $i++) { 
	// code...

	// code...

if($data = $soporte_obj->data_box()){
	$pdf->Cell(50);
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos del soporte',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre del soporte : '.$data['nom_sop']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Descripcion de soporte : '.$data['des_sop']);
	$pdf->Ln(10);

}

}
$pdf->Output();



?>