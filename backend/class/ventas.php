<?php 	

require_once('conexion.php');

class ventas extends connection{

public $id_ven;
public $nom_cli;
public $nom_pro;
public $num_pro;
public $din_gan;
public $pre_pro;
public $sta_ven;

function create_venta($ganancia){
		$this->query_exec = "INSERT INTO ventas (nom_cli,nom_pro,num_pro,din_gan,pre_pro) 

		VALUES (
		'$this->nom_cli',
		'$this->nom_pro',
		'$this->num_pro',
		'$ganancia',
		'$this->pre_pro');";
		return $this->query_go();
	} 


function create_venta_total($total){
	$this->query_exec = "INSERT INTO ventas (gan_total) VALUES ('$total');";
	return $this->query_go();
}

	function read_ventas(){
		$this->query_exec="SELECT * FROM ventas;";
		return $this->query_go();
	}
	function read_ventas_one($cod){
		$this->query_exec = "SELECT * FROM ventas WHERE id_ven='$cod';";
		
		return $this->query_go();
	}

	function delete_ventas(){
		$this->query_exec = "DELETE FROM ventas WHERE id_ven='$this->id_ven';";
		return $this->query_go();
	}


	function update_ventas($ganancia){
		$this->query_exec = "UPDATE ventas SET 
		nom_cli = '$this->nom_cli',
		nom_pro = '$this->nom_pro',
		num_pro = '$this->num_pro',
		din_gan = '$ganancia',
		pre_pro = '$this->pre_pro'
	WHERE
		id_ven='$this->id_ven';
		";
		return $this->query_go();

	}


function borrado_logico_ven(){
		$this->query_exec = "UPDATE ventas SET sta_ven = '1' WHERE id_ven='$this->id_ven';";
		return $this->query_go();
	}

	function restauracion_ven(){

		$this->query_exec = "UPDATE ventas SET sta_ven = '0';";
		return $this->query_go();

	}



}


 ?>