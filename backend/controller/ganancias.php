<?php 

require('../class/ganancias.php');
require('../class/auditoria.php');

$obj_gan = new ganancias;
$obj_aud  = new auditoria;
$obj_gan->values_box();

$total=$gan_total = $_POST['gan_total'];

switch($_REQUEST['option_name']){
	case 'Registrar ganancias':
	$obj_gan->create_gan($total);
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ganancias.php');
	break;

	case 'Actualizar ganancias':
	$obj_gan->update_gan();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ganancias.php');
	break;

	case 'Eliminar ganancias':
	$obj_gan->delete_gan();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ganancias.php');
	break;

	case 'Leer ganancia':
	$obj_gan->read_gan();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ganancias.php');
	break;
}

 ?>