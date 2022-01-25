<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/producto.php");


$producto_obj = new producto;
$producto_obj->pointer = $producto_obj->read_pro($_POST['cod_pro']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$producto_obj->pointer = $producto_obj->read_pro();
$data = $producto_obj->data_box();

$pdf->Cell(100,10,'Datos del producto',0,0,'C',0);
for ($i=0; $i <$data['cod_pro'] ; $i++) { 
	// code...

	// code...

if($data = $producto_obj->data_box()){
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Nombre del producto : '.$data['nom_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Fecha de ingreso : '.$data['fec_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cantidad del producto : '.$data['num_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Precio del producto : '.$data['pre_pro']);
	$pdf->Ln(10);

}

}
$pdf->Output();



?>