<?php
    require_once('../connexion.php');
    $query = "SELECT * FROM public.patho WHERE mer in (:codeMer)";
    $res=$db->prepare($query);
    $res->execute(array(
        ':codeMer' => 'P'
    ));
?>