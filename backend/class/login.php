
<?php


require_once('conexion.php');

class login extends connection{


		function read_login($nic_usu,$con_usu){
			$this->query_exec = "SELECT * FROM usuario WHERE nic_usu = '$nic_usu' AND con_usu = '$con_usu'";
			return $this->query_go();
		}

}





?>