<?php
    require_once('../connexion.php');

    $query = "SELECT public.patho.type FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$db->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $brut_car_patho=$res->fetchAll(PDO::FETCH_ASSOC);

    $car_patho = array();
    require_once("./../READER/readJson_carac.php");
    foreach ($caracs as $carac) {
        if (preg_match($carac["code"], $brut_car_patho)) {
            array_push($car_patho, $carac["carac"]);
        }
    }
?>