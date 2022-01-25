<?php 

require('../class/cliente.php');
require('../class/auditoria.php');

$obj_aud  = new auditoria;
$obj_aud->values_box();

switch($_REQUEST['option_name']){
	case 'Borrar auditoria':
	$obj_aud->delete_aud();
	header('location:../../frontend/view/admin_auditoria.php');
	break;


	case'borrado logico auditoria':
	$obj_aud->borrado_logico_aud();
	header('location:../../frontend/view/admin_auditoria.php');
	break;

	case 'restaurar auditorias':
	$obj_aud->restauracion_aud();
	header('location:../../frontend/view/admin_auditoria.php');
	break;
}

 ?>