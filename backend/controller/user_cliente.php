<?php 

require('../class/cliente.php');
require('../class/auditoria.php');

$obj_cli = new cliente;
$obj_aud  = new auditoria;
$obj_cli->values_box();

switch($_REQUEST['option_name']){
	case 'Registrar cliente':
	$obj_cli->create_cli($_POST['codigo']);
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_cliente.php');
	break;

	case 'Actualizar cliente':
	$obj_cli->update_cli();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_cliente.php');
	break;

	case 'Eliminar cliente':
	$obj_cli->delete_cli();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_cliente.php');
	break;

	case 'Leer cliente':
	$obj_cli->read_cli();
	$obj_aud->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/user_cliente.php');
	break;

	case 'borrado logico cliente':
	$obj_cli->borrado_logico_cli();
	header('location:../../frontend/view/user_cliente.php');
	break;

	case 'restaurar clientes':
	$obj_cli->restauracion_cli();
	header('location:../../frontend/view/user_cliente.php');
	break;
}

 ?>