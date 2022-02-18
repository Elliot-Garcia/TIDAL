<?php
    $idp = $_COOKIE['idp'];

    require_once('../connexion.php');

    $query = "SELECT public.symptome.desc AS sympt FROM public.symptpatho
                JOIN public.symptome
                    ON public.symptome.ids = public.symptpatho.ids
                WHERE public.symptpatho.idp = :idp";

    $res=$db->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $sympts_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>