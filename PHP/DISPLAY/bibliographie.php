<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init Smarty
    $smarty = new Smarty();

    $smarty->assign('title', 'Bibliographie');
    $smarty->assign('page', './bibliographie.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>