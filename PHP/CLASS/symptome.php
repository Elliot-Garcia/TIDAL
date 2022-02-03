<?php

class Symptome{
    private $ids;
    private $desc;

    public function __construct(){
        $this->ids = 0;
        $this->desc = 0;
    }

    public function getIds(){
        return($this->ids);
    }

    public function getDesc(){
        return($this->desc);
    }
}