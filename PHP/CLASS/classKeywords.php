<?php

class Keywords{
    private $idk;
    private $name;

    public function __construct($pIdk,$pName){
        $this->idk = $pIdk;
        $this->name = $pName;
    }

    public function getIdk(){
        return($this->idk);
    }

    public function getName(){
        return($this->name);
    }
}