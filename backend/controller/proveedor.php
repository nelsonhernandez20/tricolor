<?php 

require('../class/proveedor.php');
require('../class/auditoria.php');

$obj_prv = new proveedor;
$obj_aud  = new auditoria;
$obj_prv->values_box();

switch($_REQUEST['option_name']){
	case 'Registrar proveedor':
	$obj_prv->create_prv();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_proveedor.php');
	break;

	case 'Actualizar proveedor':
	$obj_prv->update_prv();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_proveedor.php');
	break;

	case 'Eliminar proveedor':
	$obj_prv->delete_prv();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_proveedor.php');
	break;

	case 'Leer proveedor':
	$obj_prv->read_prv();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_proveedor.php');
	break;

	case 'borrado logico proveedor':
		$obj_prv->borrado_logico_prv();
		$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_proveedor.php');
		break;

	case 'restaurar proveedores':
		$obj_prv->restauracion_prv();
		$obj_aud->create_aud($_REQUEST['option_name']);
		header('location:../../frontend/view/admin_proveedor.php');
		break;
}

 ?>