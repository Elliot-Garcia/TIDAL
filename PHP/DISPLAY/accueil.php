<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');
    session_start();
    require_once('../DATABASE/inscription_user.php');
    require_once('../DATABASE/connexion_user.php');
    require_once('../CHECK_CO/check_connexion.php');
    $smarty = new Smarty();

    $smarty->assign('connect',$connect);
    $smarty->assign('connect_failed',$connect_failed);
    $smarty->assign('title', 'Accueil');
    $smarty->assign('page', './accueil.tpl');
    $smarty->display('../../TPL/main_structure.tpl');



?>