<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    $connect = false;
    $smarty->assign('connect',$connect);

    $smarty->assign('title', 'Compte');
    $smarty->assign('page', './user.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>