<?php
    require_once('../connexion.php');

    $query = "SELECT public.meridien.nom FROM public.meridien
                JOIN public.patho
                    ON public.patho.mer = public.meridien.code
                WHERE public.patho.idp = :idp";

    $res=$this->getDB()->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $mer_patho=$res->fetch(PDO::FETCH_ASSOC);
?>