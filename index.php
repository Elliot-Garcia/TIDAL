<?php
    $connexion = TRUE;

    require_once('/usr/share/php/smarty3/Smarty.class.php');
    $smarty = new Smarty();

    $smarty->assign('connexion',$connexion);

    $smarty->assign('title', 'Acupuncture');
    $smarty->assign('page', 'TPL/accueil.tpl');
    $smarty->display('TPL/main_structure.tpl');
    require_once('PHP/connexion.php');
    
    
?>