<?php

    $filtre_symptome = null;
    if (!empty($_POST['filtre_meridien'])) {
        $filtre_meridien = $_POST['filtre_meridien'];
    }
    else {$filtre_meridien=null;}

    if (!empty($_POST['filtre_type_patho'])) {
        $filtre_type_patho = $_POST['filtre_type_patho'];
    }
    else {$filtre_type_patho=null;}

    if (!empty($_POST['filtre_carac'])) {
        $filtre_carac = $_POST['filtre_carac'];
    }
    else {$filtre_carac=null;}
    
    if (!empty($_POST['filtre_sympt'])) {
        $filtre_sympt = $_POST['filtre_sympt'];
    }
    else {$filtre_sympt=null;}

    require_once('../connexion.php');
    $query = "SELECT public.patho.desc AS patho, public.symptome.desc AS sympt FROM public.patho
                JOIN public.symptpatho
                    ON public.patho.idp = public.symptpatho.idp
                JOIN public.symptome
                    ON public.symptome.ids = public.symptpatho.ids
                WHERE
                    COALESCE(public.patho.mer = :meridien, True)
                    AND COALESCE(public.patho.type LIKE :type_patho, True)
                    AND COALESCE(public.patho.type LIKE :carac, True)
                    AND COALESCE(public.symptome.desc LIKE :f_sympt, True)
                ORDER BY public.patho.desc ASC";
    $res=$db->prepare($query);
    $res->execute(array(
        ':meridien' => $filtre_meridien,
        ':type_patho' => '%'.$filtre_type_patho.'%',
        ':carac' => '%'.$filtre_carac.'%',
        ':f_sympt' => '%'.$filtre_sympt.'%'
    ));
    $data_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>