<?php 

class Pathologie{
    private $idp;
    private $meridien;
    private $type;
    private $desc;

    public function __construct(){
        $this->idp = 0;
        $this->meridien = 0;
        $this->type = 0;
        $this->desc = 0;
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
