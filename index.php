<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    
    //Init connexion
    require_once('PHP/CHECK_CO/init_connexion.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    $connect = $_SESSION['Connexion_check'];
    $smarty->assign('connect',$connect);
    $connect_failed = $_SESSION['Connexion_failed'];
    $smarty->assign('connect_failed',$connect_failed);

    $smarty->assign('title', 'Acupuncture');
    $smarty->assign('page', 'TPL/accueil.tpl');
    $smarty->display('TPL/main_structure.tpl');
    
?>