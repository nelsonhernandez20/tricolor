<?php 

require('../class/soporte.php');
require('../class/auditoria.php');

$obj_sop = new soporte;
$obj_aud  = new auditoria;
$obj_sop->values_box();

switch($_REQUEST['option_name']){
	case 'Registrar soporte':
	$obj_sop->create_sop();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_soporte.php');
	break;

	case 'Actualizar soporte':
	$obj_sop->update_sop();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_soporte.php');
	break;

	case 'Eliminar soporte':
	$obj_sop->delete_sop();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_soporte.php');
	break;

	case 'Leer soporte':
	$obj_sop->read_sop();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_soporte.php');
	break;

	case 'borrado logico soporte':
	$obj_sop->borrado_logico_sop();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_soporte.php');
	break;

	case 'restaurar soportes':
		$obj_sop->restauracion_sop();
		$obj_aud->create_aud($_REQUEST['option_name']);
		header('location:../../frontend/view/admin_soporte.php');
		break;

}

 ?>