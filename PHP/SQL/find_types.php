<?php

    $query = "SELECT public.patho.type FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$this->getDB()->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $brut_typ_patho=$res->fetch(PDO::FETCH_ASSOC);

    $typ_patho = array();

    foreach ($this->getJsonTypes() as $type) {
        if (preg_match("/".$type->code."/", $brut_typ_patho["type"])) {
            array_push($typ_patho, $type->type);
        }
    }
?>