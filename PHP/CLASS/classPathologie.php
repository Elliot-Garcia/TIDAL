<?php

class Pathologie{
    private $idp;
    private $desc;
    private $db;
    private $Jcaracs;
    private $Jtypes;

    private $meridien;
    private $sympts;
    private $caracs;
    private $types;

    public function __construct($pIdp, $pDesc, $pDb, $pCaracs, $pTypes){
        $this->idp = $pIdp;
        $this->desc = $pDesc;
        $this->db = $pDb;
        $this->Jcaracs = $pCaracs;
        $this->Jtypes = $pTypes;
        $this->meridien = null;
        $this->sympts = null;
        $this->caracs = null;
        $this->types = null;
    }
    
    public function find_desc($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_desc.php");
        return $desc_patho[0]['desc'];
    }
    public function find_meridien($idp) {
        //Requête sql pour trouver les symptomes
        require("./../SQL/find_meridien.php");
        return $mer_patho['nom'];
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
        if ($this->desc == null) {
            $this->desc = $this->find_desc($this->idp);
        }
        return($this->desc);
    }
    public function getMer(){
        if ($this->meridien == null) {
            $this->meridien = $this->find_meridien($this->idp);
        }
        return($this->meridien);
    }
    public function getSympts(){
        if ($this->sympts == null) {
            $this->sympts = $this->find_symptomes($this->idp);
        }
        return($this->sympts);
    }
    public function getCaracs(){
        if ($this->caracs == null) {
            $this->caracs = $this->find_caracs($this->idp);
        }
        return($this->caracs);
    }
    public function getTypes(){
        if ($this->types == null) {
            $this->types = $this->find_types($this->idp);
        }
        return($this->types);
    }
    private function getDB(){
        return($this->db);
    }
    private function getJsonCaracs(){
        return($this->Jcaracs);
    }
    private function getJsonTypes(){
        return($this->Jtypes);
    }
}

?>
