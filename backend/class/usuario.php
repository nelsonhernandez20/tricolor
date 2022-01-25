<?php

require_once('conexion.php');

class usuario extends connection{
	
	public $cod_usu;	 
	public $nom_usu;	
	public $ape_usu;	
	public $ced_usu;	
	public $fec_usu;	
	public $sex_usu;	
	public $tlf_usu;	
	public $nic_usu;	
	public $con_usu;	
	public $sta_usu;
	public $rol_usu;

function create_usu($codigo){
	$this->con_usu = md5($this->con_usu);
	$this->query_exec = "INSERT INTO usuario(
		nom_usu,
		ape_usu,
		ced_usu,
		fec_usu,
		sex_usu,
		tlf_usu,
		nic_usu,
		con_usu,
		sta_usu) 
		VALUES
		('$this->nom_usu',
		'$this->ape_usu',
		'$this->ced_usu',
		'$this->fec_usu',
		'$this->sex_usu',
		'$codigo.$this->tlf_usu',
		'$this->nic_usu',
		'$this->con_usu',
		'$this->sta_usu');
		";
		return $this->query_go();
}	

function read_usu(){
	$this->query_exec = "SELECT * FROM usuario;";
	return $this->query_go();
}

function read_usu_one($cod){
	$this->query_exec = "SELECT * FROM usuario WHERE cod_usu='$cod';
	";
	return $this->query_go();

}

function update_usu(){
	$this->con_usu = md5($this->con_usu);
	$this->query_exec = "UPDATE usuario SET 	
	nom_usu	='$this->nom_usu',
	ape_usu	='$this->ape_usu',
	ced_usu	='$this->ced_usu',	
	fec_usu	='$this->fec_usu',	
	sex_usu	='$this->sex_usu',	
	tlf_usu	='$this->tlf_usu',	
	nic_usu	='$this->nic_usu',	
	con_usu	='$this->con_usu',	
	sta_usu	='$this->sta_usu'

	WHERE
	cod_usu = '$this->cod_usu';
	";
	return $this->query_go();
}

function delete_usu(){
	$this->query_exec ="DELETE FROM usuario
	WHERE cod_usu = '$this->cod_usu';
	";
	return $this->query_go();
}


function borrado_logico_usu(){
		$this->query_exec = "UPDATE usuario SET rol_usu = '1' WHERE cod_usu='$this->cod_usu';";
		return $this->query_go();
	}

	function restauracion_usu(){

		$this->query_exec = "UPDATE usuario SET rol_usu = '0';";
		return $this->query_go();

	}

}

 ?>