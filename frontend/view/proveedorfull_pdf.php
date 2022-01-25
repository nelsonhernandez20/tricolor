<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/proveedor.php");


$proveedor_obj = new proveedor;
$proveedor_obj->pointer = $proveedor_obj->read_prv($_POST['cod_prv']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$proveedor_obj->pointer = $proveedor_obj->read_prv();
$data = $proveedor_obj->data_box();

$pdf->Cell(100,10,'Datos del cliente',0,0,'C',0);
for ($i=0; $i <$data['cod_prv'] ; $i++) { 
	// code...

	// code...

if($data = $proveedor_obj->data_box()){
	$pdf->Cell(50);
	
	$pdf->Cell(50);
	
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre completo : '.$data['nom_prv']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Telefono : '.$data['tlf_prv']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Descripcion : '.$data['des_prv']);
	$pdf->Ln(10);

}

}
$pdf->Output();



?>