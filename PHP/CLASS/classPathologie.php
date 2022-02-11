<?php 

class Pathologie{
    private $idp;
    private $meridien;
    private $type;
    private $desc;

    public function __construct($pIdp,$pMeridien,$pType,$pDesc){
        $this->idp = $pIdp;
        $this->meridien = $pMeridien;
        $this->type = $pType;
        $this->desc = $pDesc;
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
