<?php
    require_once('../connexion.php');

    $query = "SELECT public.patho.type FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$db->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $brut_typ_patho=$res->fetchAll(PDO::FETCH_ASSOC);

    $typ_patho = array();
    require_once("./../READER/readJson_type.php");
    foreach ($types_patho as $type) {
        if (preg_match($type["code"], $brut_typ_patho)) {
            array_push($typ_patho, $type["type"]);
        }
    }
?>