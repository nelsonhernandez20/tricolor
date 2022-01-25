<?php 

require('../class/conexion.php');

$conexion = new connection;

$datos=$this->query_exec = "SELECT * FROM cliente WHERE cod_cli='$cod';";
		
		return $this->query_go();


echo ($datos);

 ?>