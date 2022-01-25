<?php 

require("../../backend/class/fpdf/fpdf.php");
require("../../backend/class/ganancia_total.php");


$ganancia_total = new GananciaTotal;

$ganancia_total->pointer=$ganancia_total->read_ganancia_total();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$ganancia_total->pointer = $ganancia_total->read_ganancia_total();
$data = $ganancia_total->data_box();


$pdf->Cell(100,10,'Datos de las ganancias',0,0,'C',0);

for ($i=0; $i <=$data['id_gan'] ; $i++) {


if ($data = $ganancia_total->data_box()) {
	$pdf->Cell(50);
	
	$pdf->Ln(20);
	$pdf->Cell(100,10,'Ganancia total : '.$data['gan_total']);
	$pdf->Ln(10);
	$pdf->Cell(100,10,'Fecha de la ganancia : '.$data['fec_gan']);
	$pdf->Ln(10);
	


}


} 


$pdf->Output();

 ?>


 <?php 

while ($data['id_gan']) {
	
}

  ?>