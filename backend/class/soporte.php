<?php 

require_once('conexion.php');

class soporte extends connection{

public $cod_sop;	
public $nom_sop;	
public $des_sop;
public $sta_sop;

function create_sop(){
	$this->query_exec = "INSERT INTO soporte (nom_sop,des_sop)
		
		VALUES 
		('$this->nom_sop',
		'$this->des_sop');";

		return $this->query_go();
}

function read_sop(){
	$this->query_exec = "SELECT * FROM soporte;";
	return $this->query_go();
}

function read_sop_one($cod){
	$this->query_exec = "SELECT * FROM soporte WHERE cod_sop='$cod';
	";
	return $this->query_go();
}

function update_sop(){
	$this->query_exec = "UPDATE soporte SET 
	nom_sop = '$this->nom_sop',
	des_sop ='$this->des_sop';
	";

	return $this->query_go();
}

function delete_sop(){
	$this->query_exec = "DELETE FROM soporte 
		WHERE 
		cod_sop = '$this->cod_sop';
	";
	return $this->query_go();
}


	function borrado_logico_sop(){
		$this->query_exec = "UPDATE soporte SET sta_sop = '1' WHERE cod_sop='$this->cod_sop';";
		return $this->query_go();
	}

	function restauracion_sop(){

		$this->query_exec = "UPDATE soporte SET sta_sop = '0';";
		return $this->query_go();

	}


}

 ?>