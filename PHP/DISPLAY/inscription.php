<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');
    require_once('../CHECK_CO/check_connexion.php');

    

    $smarty = new Smarty();
    $smarty->assign('connect',$connect);
    $smarty->assign('title', 'Inscription');
    $smarty->assign('page', './inscription.tpl');
    $smarty->display('../../TPL/main_structure.tpl');

?>