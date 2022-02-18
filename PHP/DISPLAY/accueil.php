<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');
    require_once('../READER/readJson_utilisateur.php');

    $smarty = new Smarty();

    $connect = $_SESSION['Connected'];
    $smarty->assign('connect',$connect);
    $smarty->assign('title', 'Accueil');
    $smarty->assign('page', './accueil.tpl');
    $smarty->display('../../TPL/main_structure.tpl');

?>