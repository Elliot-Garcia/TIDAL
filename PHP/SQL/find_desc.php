<?php
    require_once('../connexion.php');

    $query = "SELECT public.patho.desc FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$db->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $sympts_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>
