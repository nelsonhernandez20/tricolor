<?php 

require('../class/producto.php');
require('../class/auditoria.php');

$obj_pro = new producto;
$obj_aud  = new auditoria;
$obj_pro->values_box();

switch($_REQUEST['option_name']){
	case 'registrar producto':
	$obj_pro->create_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

	case 'Actualizar producto':
	$obj_pro->update_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

	case 'Eliminar producto':
	$obj_pro->delete_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

	case 'Leer producto':
	$obj_pro->read_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

	case 'borrado logico producto':
	$obj_pro->borrado_logico_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

	case 'restaurar productos':
	$obj_pro->restauracion_pro();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_producto.php');
	break;

}

 ?>