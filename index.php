<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    session_start();
    // Init page d'accueil
    $smarty = new Smarty();
    
    $connect = $_SESSION['Connexion_check'];
    $smarty->assign('connect',$connect);

    $smarty->assign('title', 'Acupuncture');
    $smarty->assign('page', 'TPL/accueil.tpl');
    $smarty->display('TPL/main_structure.tpl');
    require_once('PHP/connexion.php');
?>