<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    session_start();

    // Init Smarty
    $smarty = new Smarty();
    $connect = $_SESSION['Connexion_check'];
    $smarty->assign('connect',$connect);
    $smarty->assign('title', 'Bibliographie');
    $smarty->assign('page', './bibliographie.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>