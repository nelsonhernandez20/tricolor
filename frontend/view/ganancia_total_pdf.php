<?php 

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/ganancia_total.php");


$ganancia_total = new GananciaTotal;


 $ganancia_total->pointer=$ganancia_total->read_pro_one($_POST['id_gan']);


 $pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);


if ($data = $ganancia_total->data_box()) {
	$pdf->Cell(50);
	$pdf->Cell(100,10,'Datos de la Ganancia',0,0,'C',0);
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Ganancia total : '.$data['gan_total']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Fecha de la ganancia : '.$data['fec_gan']);
	$pdf->Ln(10);
	


}

$pdf->Output();
 ?>