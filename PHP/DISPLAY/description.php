<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();

    $titre = 'Description';
    $smarty->assign('title', $titre);
    $smarty->assign('page', './description.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>