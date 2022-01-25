<?php 

require_once('conexion.php');

class producto extends connection{

	public $cod_pro;	
	public $nom_pro;
	public $fec_pro;	
	public $num_pro;	
	public $pre_pro;

	function create_pro(){
	
	$this->query_exec = "INSERT INTO producto (nom_pro,fec_pro,num_pro,pre_pro) VALUES (
	'$this->nom_pro',
	'$this->fec_pro',
	'$this->num_pro',
	'$this->pre_pro'
	);";
	
	return $this->query_go();
	
	}

	function read_pro(){
		$this->query_exec = "SELECT * FROM producto;";
		return $this->query_go();
	}

	function read_pro_one($cod){
	$this->query_exec = "SELECT * FROM producto WHERE cod_pro='$cod';";
	return $this->query_go();
	}

	function read_pro_one_nom($nom,$pre){
	$this->query_exec = "SELECT * FROM producto WHERE nom_pro ='$nom'AND pre_pro='$pre'";
	return $this->query_go();
	}

	function update_pro(){
		$this->query_exec = "UPDATE producto SET 
		nom_pro = '$this->nom_pro',
		fec_pro = '$this->fec_pro',
		num_pro = '$this->num_pro',
		pre_pro = '$this->pre_pro'
	WHERE
		cod_pro='$this->cod_pro';
		";
		return $this->query_go();

	}

	function delete_pro(){
	$this->query_exec = "DELETE FROM producto WHERE cod_pro = '$this->cod_pro';";
	return $this->query_go();
	}

	function borrado_logico_pro(){
		$this->query_exec = "UPDATE producto SET sta_pro = '1' WHERE cod_pro='$this->cod_pro';";
		return $this->query_go();
	}

	function restauracion_pro(){

		$this->query_exec = "UPDATE producto SET sta_pro = '0';";
		return $this->query_go();

	}


	}

 ?>