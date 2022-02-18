<?php 

class Pathologie{
    private $idp;
    private $meridien;
    private $type;
    private $carac;
    private $symptome;
    private $desc;

    public function __construct($pIdp,$pMeridien,$pType,$pDesc){
        $this->idp = $pIdp;
        $this->meridien = $pMeridien;
        $this->type = $pType;
        $this->symptome = find_symptomes();
        $this->desc = $pDesc;
    }

    private function find_symptomes() {
        //Requête sql pour trouver les symptomes
        $_COOKIE['idp'] = $idp;
        require_once("./../SQL/find_symptomes.php");
        return $sympts_patho;
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
