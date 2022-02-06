<?php
    require_once("../connexion.php");
    $query = "SELECT DISTINCT type FROM public.patho ORDER BY type ASC";
    $res=$db->prepare($query);
    $res->execute();
    $data_type_patho=$res->fetchAll(PDO::FETCH_ASSOC);
?>