<?php 

require('../class/ganancia_total.php');
require('../class/auditoria.php');
$ganancia_total = new GananciaTotal();
$auditoria = new auditoria;
$ganancia_total->values_box();

$gan = $_POST['gan_total'];

$total = $gan;


switch ($_REQUEST['option_name']) {
	case 'ganancia total':
		$ganancia_total->create_ganancia_total($total);
		$auditoria->create_aud($_REQUEST['option_name']);
		header('location:../../frontend/view/user_ventas.php');
		break;
	
	case 'Eliminar Ganancia':
	$ganancia_total->delete_ganancia_total();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_ganancia_total.php');

	case 'borrado logico ganancias':
	$ganancia_total->borrado_logico_gan();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_ganancia_total.php');
	break;

	case 'restaurar ganancias':
	$ganancia_total->restauracion_gan();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_ganancia_total.php');
	break;

	case 'borrado logico ganancias':
	$ganancia_total->borrado_logico_gan();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_ganancia_total.php');
	break;

	case 'restaurar ganancias':
	$ganancia_total->restauracion_gan();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_ganancia_total.php');
	break;

}

 ?>