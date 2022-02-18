<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    require_once('../READER/readJson_utilisateur.php');

    // Init page d'accueil
    $smarty = new Smarty();
    session_start();
    $connect = $_SESSION['Connexion_check'];
    $smarty->assign('connect',$connect);

    $smarty->assign('title', 'Compte');
    $smarty->assign('page', './user.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>