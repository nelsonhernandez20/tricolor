<?php

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/cliente.php");


$cliente_obj = new cliente;
$cliente_obj->pointer = $cliente_obj->read_cli_one($_POST['cod_cli']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

if($data = $cliente_obj->data_box()){
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos del cliente',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre completo : '.$data['nom_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Apellido completo : '.$data['ape_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cedula : '.$data['ced_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Sexo : '.$data['sex_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Telefono : '.$data['tlf_cli']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Numero de cuenta : '.$data['cue_cli']);
	$pdf->Ln(10);

}

$pdf->Output();


?>