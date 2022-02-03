<?php

class Meridien{
    private $code;
    private $nom;
    private $element;
    private $yin;

    public function __construct(){
        $this->code = 0;
        $this->nom = 0;
        $this->element = 0;
        $this->yin = 0;
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