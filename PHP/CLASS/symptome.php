<?php

class Symptome{
    private $ids;
    private $desc;

    public function __construct($pIds,$pDesc){
        $this->ids = $pIds;
        $this->desc = $pDesc;
    }

    public function getIds(){
        return($this->ids);
    }

    public function getDesc(){
        return($this->desc);
    }
}