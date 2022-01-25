<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/producto.php");


$producto_obj = new producto;
$producto_obj->pointer = $producto_obj->read_pro_one($_POST['cod_pro']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if($data = $producto_obj->data_box()){
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos del producto',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre del producto : '.$data['nom_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Fecha de ingreso : '.$data['fec_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cantidad del producto : '.$data['num_pro']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Precio del producto : '.$data['pre_pro']);
	$pdf->Ln(10);


}

$pdf->Output();


?>