<?php 


require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/auditoria.php");


$auditoria = new auditoria;

$auditoria->pointer = $auditoria->read_aud_one($_POST['cod_aud']);

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


if($data = $auditoria->data_box()){
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos de la auditoria',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Nombre completo : '.$data['fec_aud']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Apellido completo : '.$data['hor_aud']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Cedula : '.$data['acc_aud']);
	$pdf->Ln(10);


}

$pdf->Output();

 ?>