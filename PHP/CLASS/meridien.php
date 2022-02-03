<?php

class Meridien{
    private $code;
    private $nom;
    private $element;
    private $yin;

    public function __construct($pCode,$pNom,$pElement,$pYin){
        $this->code = $pCode;
        $this->nom = $pNom;
        $this->element = $pElement;
        $this->yin = $pYin;
    }

    public function getCode(){
        return($this->code);
    }

    public function getNom(){
        return($this->nom);
    }

    public function getElement(){
        return($this->element);
    }

    public function getYin(){
        return($this->yin);
    }
}

?>