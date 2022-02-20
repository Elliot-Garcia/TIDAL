<?php

class Pathologie{
    private $idp;
    private $desc;
    private $db;
    private $caracs;
    private $types;

    public function __construct($pIdp, $pDesc, $pDb, $pCaracs, $pTypes){
        $this->idp = $pIdp;
        $this->desc = $pDesc;
        $this->db = $pDb;
        $this->caracs = $pCaracs;
        $this->types = $pTypes;
    }
    
    private function find_desc($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_desc.php");
        return $desc_patho;
    }

    public function find_meridien($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_meridien.php");
        return $mer_patho;
    }
    public function find_types($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_types.php");
        return $typ_patho;
    }
    public function find_caracs($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_caracs.php");
        return $car_patho;
    }
    public function find_symptomes($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_symptomes.php");
        return $sympts_patho;
    }

    public function getIdp(){
        return($this->idp);
    }
    public function getDesc(){
        return($this->desc);
    }
    private function getDB(){
        return($this->db);
    }
    private function getJsonCaracs(){
        return($this->caracs);
    }
    private function getJsonTypes(){
        return($this->types);
    }
}

?>
