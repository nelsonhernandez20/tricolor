<?php 

require_once('conexion.php');

class cliente extends connection{
	 
	 public $cod_cli;
	 public $nom_cli;	
	 public $ape_cli;	
	 public $ced_cli;
	 public $sex_cli;	
	 public $tlf_cli;	
	 public $cue_cli;
	 public $sta_cli;

	function create_cli($codigo){
		$this->query_exec = "INSERT INTO cliente (nom_cli,ape_cli,ced_cli,sex_cli,tlf_cli,cue_cli) 

		VALUES (
		'$this->nom_cli',
		'$this->ape_cli',
		'$this->ced_cli',
		'$this->sex_cli',
		'$codigo.$this->tlf_cli',
		'$this->cue_cli');";
		return $this->query_go();
	} 

	function read_cli(){
		$this->query_exec="SELECT * FROM cliente;";
		return $this->query_go();
	}
	function read_cli_one($cod){
		$this->query_exec = "SELECT * FROM cliente WHERE cod_cli='$cod';";
		
		return $this->query_go();
	}


	function read_cli_one_nom($nom){
		$this->query_exec = "SELECT * FROM cliente WHERE nom_cli='$nom';";
		
		return $this->query_go();
	}

	function update_cli(){
		$this->query_exec = "UPDATE cliente SET
		nom_cli = '$this->nom_cli',
		ape_cli = '$this->ape_cli',
		ced_cli = '$this->ced_cli',
		sex_cli = '$this->sex_cli',
		tlf_cli = '$this->tlf_cli',
		cue_cli = '$this->cue_cli'
		WHERE
		cod_cli='$this->cod_cli';
		";
		return $this->query_go();
	}


	function borrado_logico_cli(){
		$this->query_exec = "UPDATE cliente SET sta_cli = '1' WHERE cod_cli='$this->cod_cli';";
		return $this->query_go();
	}

	function restauracion_cli(){

		$this->query_exec = "UPDATE cliente SET sta_cli = '0';";
		return $this->query_go();

	}

	function delete_cli(){
		$this->query_exec = "DELETE FROM cliente WHERE cod_cli='$this->cod_cli';";
		return $this->query_go();
	}
} 

 ?>