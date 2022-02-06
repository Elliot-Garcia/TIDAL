<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    // Configuration de la page à afficher
    $smarty->assign('title', 'Recherche');
    $smarty->assign('page', './recherche.tpl');

    // Appel des informations pour la page
    require_once('../SQL/pathologie.php');
    $data=$res->fetchAll();
    //print_r($data);
    $smarty->assign('data',$data);

    // Affichage de la page
    $smarty->display('../../TPL/main_structure.tpl');
?>