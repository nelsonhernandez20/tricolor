<?php 

require('../class/usuario.php');
require('../class/auditoria.php');

$obj_usu = new usuario;
$obj_aud  = new auditoria;
$obj_usu->values_box();

$codigo = $_POST['codigo'];

switch($_REQUEST['option_name']){
	case 'Crear cuenta':
	$obj_usu->create_usu($codigo);
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/login.php');
	break;

	case 'Actualizar usuario':
	$obj_usu->update_usu();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_user.php');
	break;

	case 'Eliminar usuario':
	$obj_usu->delete_usu();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_user.php');
	break;

	case 'Leer usuario':
	$obj_usu->read_usu();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_user.php');
	break;

	case 'borrado logico usuario':
		$obj_usu->borrado_logico_usu();
		$obj_aud->create_aud($_REQUEST['option_name']);
		header('location:../../frontend/view/admin_user.php');
		break;

	case 'restauracion usuarios':
	$obj_usu->restauracion_usu();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_user.php');
	break;
}

 ?>