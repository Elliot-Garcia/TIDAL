<?php

class Keysympt{
    private $idk;
    private $ids;

    public function __construct($pIdk,$pIds){
        $this->idk = $pIdk;
        $this->ids = $pIds;
    }

    public function getIdk(){
        return($this->idk);
    }

    public function getIds(){
        return($this->ids);
    }
}