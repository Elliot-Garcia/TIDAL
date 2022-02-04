<?php
    require_once("../connexion.php");
    $sql = "SELECT * FROM public.meridien";
    $dbh -> query ($sql);
    $dbh -> commit();




?>