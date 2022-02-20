<?php

    $query = "SELECT public.symptome.desc FROM public.symptpatho
                JOIN public.symptome
                    ON public.symptome.ids = public.symptpatho.ids
                WHERE public.symptpatho.idp = :idp";

    $res=$this->getDB()->prepare($query);
    $res->execute(array(
        ':idp' => $idp
    ));

    $sympts_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>