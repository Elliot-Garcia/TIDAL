<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    $smarty->assign('title', 'Recherche');
    $smarty->assign('page', './recherche.tpl');

    require_once('../SQL/pathologie.php');
    $data=$res->fetchAll();
    print_r($data[0]);
    $smarty->assign('res',$res);
    $smarty->display('../../TPL/main_structure.tpl');
?>