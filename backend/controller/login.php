<?php

require_once('../class/login.php');
echo $_POST['nic_usu'];
echo $_POST['con_usu'];
$obj_log = new login;


$obj_log->pointer = $obj_log->read_login($_POST['nic_usu'],md5($_POST['con_usu']));
$dataR = $obj_log->data_box();

$usuario = $_POST['nic_usu'];
$password = $_POST['con_usu'];
echo $dataR['nic_usu'];
echo $dataR['con_usu'];



if($usuario == $dataR['nic_usu'] && md5($password) == $dataR['con_usu'] && $dataR['sta_usu']==1){
		session_start();
		$_SESSION['cod_usu'] = $dataR['cod_usu'];
		header("Location: ../../frontend/view/admin_user.php");
		
		
} elseif($usuario == $dataR['nic_usu'] && md5($password) == $dataR['con_usu'] && $dataR['sta_usu']==2){

		session_start();
		$_SESSION['cod_usu'] = $data['cod_usu'];
		header('location:../../frontend/view/user_user.php');
		
		
} elseif ($usuario == $dataR['nic_usu'] && md5($password) == $dataR['con_usu'] && $dataR['sta_usu']==0) {
	session_start();
		$_SESSION['cod_usu'] = $data['cod_usu'];
		header('location:../../frontend/view/user2_user.php');}

else{
	header('location:../../frontend/view/login.php');
}



?>
	