<?php 

class Pathologie{
    private $idp;
    private $meridien;
    private $types;
    private $caracs;
    private $symptomes;
    private $desc;

    public function __construct($pIdp){
        $this->idp = $pIdp;
        $this->meridien = find_meridien($pIdp);
        $this->types = find_types($pIdp);
        $this->caracs = find_caracs($pIdp);
        $this->symptomes = find_symptomes($pIdp);
        $this->desc = find_desc($pIdp);
    }

    private function find_meridien($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_meridien.php");
        return $mer_patho;
    }
    private function find_types($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_types.php");
        return $typ_patho;
    }
    private function find_caracs($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_caracs.php");
        return $car_patho;
    }
    private function find_symptomes($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_symptomes.php");
        return $sympts_patho;
    }
    private function find_desc($idp) {
        //Requête sql pour trouver les symptomes
        require_once("./../SQL/find_desc.php");
        return $desc_patho;
    }

    public function getIdp(){
        return($this->idp);
    }

    public function getMeridien(){
        return($this->meridien);
    }

    public function getType(){
        return($this->type);
    }

    public function getDesc(){
        return($this->dec);
    }

}

?>
