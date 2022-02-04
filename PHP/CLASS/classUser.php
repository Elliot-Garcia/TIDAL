<?php

class User{
    private $id;
    static private $current_id;
    private $email;
    private $photo_profil;

    public function __construct($pId,$pEmail){
        $this->login = $pId;
        $this->email = $pEmail;
    }

    public function getIdk(){
        return($this->idk);
    }

    public function getIds(){
        return($this->ids);
    }

}