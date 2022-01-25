<?php 


require('../class/ventas.php');
require('../class/producto.php');
require('../class/cliente.php');
require('../class/ganancias.php');
require('../class/auditoria.php');

$ventas = new ventas;
$ventas->values_box();
$producto = new producto;
$producto->values_box();
$cliente = new cliente;
$cliente->values_box();
$ganancias = new ganancias;
$ganancias->values_box();
$auditoria= new auditoria;

$cliente->pointer = $cliente->read_cli_one_nom($_POST['nom_cli']);
$dataC = $cliente->data_box();
$producto->pointer = $producto->read_pro_one_nom($_POST['nom_pro'],$_POST['pre_pro']);
$dataP = $producto->data_box();


$nom_cliente = $_POST['nom_cli'];
$nom_producto = $_POST['nom_pro'];
$num_producto = $_POST['num_pro'];
$pre_producto = $_POST['pre_pro'];
//$total = $_POST['gan_total'];

switch ($_REQUEST['option_name']) {
	case 'Registrar Venta':
	if ($nom_cliente == $dataC['nom_cli'] && $nom_producto == $dataP['nom_pro'] && $pre_producto == $dataP['pre_pro'] && $num_producto <= $dataP['num_pro']) {
		
		$ganancia=$num_producto * $pre_producto;
		
		$ventas->create_venta($ganancia);
		$auditoria->create_aud($_REQUEST['option_name']);
		header('location:../../frontend/view/admin_ventas.php');
	}
		
		break;

	case 'Eliminar venta':
	
	$ventas->delete_ventas();
	$auditoria->create_aud($_REQUEST['option_name']);	
	header('location:../../frontend/view/admin_ventas.php');


	break;

	
	case 'Actualizar venta':
	if ($nom_cliente == $dataC['nom_cli'] && $nom_producto == $dataP['nom_pro'] && $dataP['pre_pro']) {
		// code...
	
	$ganancia=$num_producto * $pre_producto;
	$ventas->update_ventas($ganancia);
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ventas.php');
	}
	break;

	case 'borrado logico venta':
	$ventas->borrado_logico_ven();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ventas.php');

	break;

	case 'restaurar ventas':
	$ventas->restauracion_ven();
	$auditoria->create_aud($_REQUEST['option_name']);
	header('location:../../frontend/view/admin_ventas.php');

}

 ?>