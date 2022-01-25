<?php

class connection{

    private $server;
    private $user;
    private $pass;
    private $dataBase;
    private $connection_exec;
    public $query_exec;
    public $pointer;

    public function __construct(){
         $this->server = 'localhost';
         $this->user = 'root';
         $this->pass = '';
         $this->dataBase = 'variedades_tricolor';
         $this->connectionDB();
    }

    
    public function connectionDB(){
        $this->connection_exec = new mysqli($this->server,$this->user,$this->pass,$this->dataBase);
    }


    public function query_go(){
        //echo $this->query_exec;
        return $this->connection_exec->query( $this->query_exec);
   
    }


    public function values_box(){
        foreach($_REQUEST as $name_input => $name_value){
            $this->$name_input = $name_value;
        }
    }


    public function data_box(){
        return $this->pointer->fetch_assoc();
    }

}


?>