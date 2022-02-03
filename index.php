<?php
    $smarty = new Smarty();

    $smarty->assign('title', 'Acupuncture');
    $smarty->assign('page', 'accueil.tpl');

    $smarty->display('main_structure.tpl');
?>