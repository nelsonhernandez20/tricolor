<?php 
require_once('conexion.php');

class proveedor extends connection{

	public $cod_prv;	
	public $nom_prv;	
	public $tlf_prv;	
	public $des_prv;
	public $sta_prv;

function create_prv(){
	$this->query_exec = "INSERT INTO proveedores(nom_prv,tlf_prv,des_prv)
	VALUES 
	('$this->nom_prv',
	'$this->tlf_prv',
	'$this->des_prv');
	";
	return $this->query_go();
}

function read_prv(){
	$this->query_exec = "SELECT * FROM proveedores;";
	return $this->query_go();
}

function read_prv_one($cod){
	$this->query_exec = "SELECT * FROM proveedores WHERE cod_prv = '$cod';";
	return $this->query_go();
}

function update_prv(){
	$this->query_exec = "UPDATE proveedores SET 
	nom_prv = '$this->nom_prv',
	tlf_prv = '$this->tlf_prv',
	des_prv = '$this->des_prv'
	WHERE cod_prv = '$this->cod_prv';
	";
	return $this->query_go();
}

function delete_prv(){
	$this->query_exec = "DELETE FROM proveedores WHERE cod_prv = '$this->cod_prv';
	";
	return $this->query_go();
}

function borrado_logico_prv(){
		$this->query_exec = "UPDATE proveedores SET sta_prv = '1' WHERE cod_prv='$this->cod_prv';";
		return $this->query_go();
	}

	function restauracion_prv(){

		$this->query_exec = "UPDATE proveedores SET sta_prv = '0';";
		return $this->query_go();

	}

}

 ?>