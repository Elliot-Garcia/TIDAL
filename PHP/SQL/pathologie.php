<?php
$filtre_symptome = null;
$filtre_meridien = null;
$filtre_type_patho = null;
$carac = null;
    require_once('../connexion.php');
    $query = "SELECT public.patho.desc AS patho, public.symptome.desc AS sympt FROM public.patho
                JOIN public.symptpatho
                    ON public.patho.idp = public.symptpatho.idp
                JOIN public.symptome
                    ON public.symptome.ids = public.symptpatho.ids
                WHERE
                    COALESCE(public.patho.mer = :meridien, True)
                    AND COALESCE(public.patho.type = :type_patho, True)
                    AND COALESCE(public.patho.mer = :carac, True)
                ORDER BY public.patho.desc ASC";
    $res=$db->prepare($query);
    $res->execute(array(
        ':meridien' => $filtre_meridien,
        ':type_patho' => $filtre_type_patho,
        ':carac' => $filtre_carac
    ));
    $data_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>