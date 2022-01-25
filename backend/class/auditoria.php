<?php 

require_once('conexion.php');


class auditoria extends connection{
	public $cod_gan;
	public $date;	
	public $fec_aud;
	public $hor_aud;
	public $acc_aud;
	public $sta_aud;

function create_aud($accion){

	$this->acc_aud = $accion;

	$this->date = getDate();
	$this->hor_aud = $this->date['hours'].":".$this->date['minutes'];
	$this->fec_aud = $this->date['year']."/".$this->date['mon']."/".$this->date['mday'];

	$this->query_exec = "INSERT INTO auditoria (fec_aud,hor_aud,acc_aud) 
	VALUES	
	('$this->fec_aud',
	 '$this->hor_aud',
	 '$this->acc_aud');
		  ";
	return $this->query_go(); 
}

function read_aud(){
	$this->query_exec = "SELECT * FROM auditoria;";
	return $this->query_go();
}

function read_aud_one($cod){
		$this->query_exec = "SELECT * FROM auditoria WHERE cod_aud='$cod';";
		
		return $this->query_go();
	}

function delete_aud(){
	$this->query_exec = "DELETE FROM auditoria 
		WHERE 
		cod_aud = '$this->cod_aud';
	";
	return $this->query_go();
}

	function borrado_logico_aud(){
		$this->query_exec = "UPDATE auditoria SET sta_aud = '1' WHERE cod_aud='$this->cod_aud';";
		return $this->query_go();
	}

	function restauracion_aud(){

		$this->query_exec = "UPDATE auditoria SET sta_aud = '0';";
		return $this->query_go();

	}


}

 ?>
