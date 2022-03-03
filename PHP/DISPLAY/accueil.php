<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');
    session_start();
    require_once('../TRAITMENT_JSON/exeJson_inscription.php');
    require_once('../READER/readJson_utilisateur.php');

    $smarty = new Smarty();
    $connect = $_SESSION['Connexion_check'];
    $connect_failed = $_SESSION['Connexion_failed'];
    $smarty->assign('connect',$connect);
    $smarty->assign('connect_failed',$connect_failed);
    $smarty->assign('title', 'Accueil');
    $smarty->assign('page', './accueil.tpl');
    $smarty->display('../../TPL/main_structure.tpl');



?>