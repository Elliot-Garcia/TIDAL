<?php
    require_once("../connexion.php");
    $query = "SELECT code, nom FROM public.meridien ORDER BY nom ASC";
    $res=$db->prepare($query);
    $res->execute();
    $data_meridien=$res->fetchAll(PDO::FETCH_ASSOC);
?>