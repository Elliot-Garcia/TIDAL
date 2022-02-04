<?php 

class SymptPatho{
    private $idp;
    private $ids;
    private $aggr;

    public function __construct($pIdp,$pIds,$pAggr,$pDesc){
        $this->idp = $pIdp;
        $this->ids = $pIds;
        $this->aggr = $pAggr;
    }

    public function getIdp(){
        return($this->idp);
    }

    public function getIds(){
        return($this->ids);
    }

    public function getAggr(){
        return($this->aggr);
    }


}

?>
