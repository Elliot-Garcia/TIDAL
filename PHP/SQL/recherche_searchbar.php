<?php
    $input_recherche = $_GET['term'];
    
    $query="SELECT DISTINCT public.symptome.desc FROM public.symptome WHERE public.symptome.desc LIKE '%".$input_recherche."%' ORDER BY public.symptome.desc ASC";

    require_once("../connexion.php");
    $res = $db->query($query);

    $proposition = array();

    while($sympt = $res->fetch()){
        array_push($proposition, $sympt['desc']);
    }
    echo json_encode($proposition);
?>