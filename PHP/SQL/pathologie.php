<?php

    $filtre_meridien=null;
    $filtre_type_patho=null;
    $filtre_carac=null;
    $filtre_sympt=null;

    if (isset($_POST['valider'])) {
        if (!empty($_POST['filtre_meridien'])) {
            $filtre_meridien = $_POST['filtre_meridien'];
        }

        if (!empty($_POST['filtre_type_patho'])) {
            $filtre_type_patho = $_POST['filtre_type_patho'];
        }

        if (!empty($_POST['filtre_carac'])) {
            $filtre_carac = $_POST['filtre_carac'];
        }
        
        if (!empty($_POST['filtre_sympt'])) {
            $filtre_sympt = $_POST['filtre_sympt'];
        }
    }
    require_once('../connexion.php');
    $query = "SELECT public.patho.idp FROM public.patho
                JOIN public.symptpatho
                    ON public.patho.idp = public.symptpatho.idp
                JOIN public.symptome
                    ON public.symptome.ids = public.symptpatho.ids
                WHERE
                    COALESCE(public.patho.mer = :meridien, True)
                    AND COALESCE(public.patho.type ~ :type_patho, True)
                    AND COALESCE(public.patho.type LIKE :carac, True)
                    AND COALESCE(public.symptome.desc LIKE :f_sympt, True)
                ORDER BY public.patho.desc ASC";
    $res=$db->prepare($query);
    $res->execute(array(
        ':meridien' => $filtre_meridien,
        ':type_patho' => $filtre_type_patho,
        ':carac' => '%'.$filtre_carac.'%',
        ':f_sympt' => '%'.$filtre_sympt.'%'
    ));
    $idp_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>