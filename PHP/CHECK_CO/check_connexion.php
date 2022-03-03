<?php
    session_start();
    
    require_once('../TRAITMENT_JSON/exeJson_inscription.php');
    require_once('../READER/readJson_utilisateur.php');
    
    $connect = $_SESSION['Connexion_check'];
    $connect_failed = $_SESSION['Connexion_failed'];
?>