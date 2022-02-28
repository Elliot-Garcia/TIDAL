<?php

    require_once('/usr/share/php/smarty3/Smarty.class.php');

    $smarty = new Smarty();

    $connect = $_SESSION['Connexion_check'];
    $smarty->assign('connect',$connect);
    $smarty->assign('title', 'Inscription');
    $smarty->assign('page', './inscription.tpl');
    $smarty->display('../../TPL/main_structure.tpl');

?>