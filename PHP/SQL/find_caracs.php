<?php

    $query = "SELECT public.patho.type FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$this->getDB()->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $brut_car_patho=$res->fetch(PDO::FETCH_ASSOC);

    $car_patho = array();

    foreach ($this->getJsonCaracs() as $carac) {
        if (preg_match("/".$carac->code."/", $brut_car_patho["type"])) {
            array_push($car_patho, $carac->carac);
        }
    }
?>