<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    $connexion = false;
    $smarty->assign('connexion',$connexion);

    $smarty->assign('title', 'Compte');
    $smarty->assign('page', 'TPL/user.tpl');
    $smarty->display('TPL/main_structure.tpl');
    require_once('PHP/connexion.php');
?>