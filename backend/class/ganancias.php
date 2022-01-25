<?php 

require_once('conexion.php');


class ganancias extends connection{
	public $cod_gan;	
	public $din_gan;
	public $fec_gan;

function create_gan($total){
	$this->query_exec = "INSERT INTO ganancias (gan_total,fec_gan) 
	VALUES	
	('$this->din_gan',
	 '$this->fec_gan');
		  ";
	return $this->query_go(); 
}

function read_gan(){
	$this->query_exec = "SELECT * FROM ganancias;";
	return $this->query_go();
}

function read_gan_one($id){
	$this->query_exec = "SELECT * FROM ganancias WHERE cod_gan='$id';";
	return $this->query_go();
}

function update_gan(){
	$this->query_exec = "UPDATE ganancias SET
	din_gan = '$this->din_gan',
	fec_gan = '$this->fec_gan'
	
	WHERE cod_gan = '$this->cod_gan';
	";
	return $this->query_go();
}

function delete_gan(){
	$this->query_exec = "DELETE FROM ganancias
	WHERE cod_gan = '$this->cod_gan';
	";
	return $this->query_go();
}

}
 ?>
