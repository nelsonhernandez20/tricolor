<?php 

require_once('conexion.php');

class GananciaTotal extends connection{
public $id_gan;
public $gan_total; 
public $fec_gan;


	function create_ganancia_total($total){
		$this->query_exec = "INSERT INTO ganancia_total (gan_total, fec_gan) VALUES ('$total',NOW());";

		return $this->query_go();
	}

	function read_ganancia_total(){
		$this->query_exec = "SELECT * FROM ganancia_total;";
		return $this->query_go();
	}


	function read_pro_one($cod){
	$this->query_exec = "SELECT * FROM ganancia_total WHERE id_gan='$cod';";
	return $this->query_go();
	}

	function delete_ganancia_total(){
		$this->query_exec = "DELETE FROM ganancia_total WHERE id_gan = '$this->id_gan';";
		return $this->query_go();
	}


	function borrado_logico_gan(){
		$this->query_exec = "UPDATE ganancia_total SET sta_gan = '1' WHERE id_gan='$this->id_gan';";
		return $this->query_go();
	}

	function restauracion_gan(){

		$this->query_exec = "UPDATE ganancia_total SET sta_gan = '0';";
		return $this->query_go();

	}


}

 ?>