<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');

    require_once('../CHECK_CO/check_connexion.php');
    
    require_once('../TRAITMENT_JSON/exeJson_inscription.php');
    require_once('../READER/readJson_utilisateur.php');

    $smarty = new Smarty();

    $smarty->assign('connect',$connect);
    $smarty->assign('connect_failed',$connect_failed);
    $smarty->assign('title', 'Accueil');
    $smarty->assign('page', './accueil.tpl');
    $smarty->display('../../TPL/main_structure.tpl');

?>