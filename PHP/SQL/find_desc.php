<?php

    $query = "SELECT public.patho.desc FROM public.patho
                WHERE public.patho.idp = :idp";

    $res=$this->getDB()->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $desc_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>
