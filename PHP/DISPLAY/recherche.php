<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    // Init page d'accueil
    $smarty = new Smarty();
    
    // Configuration de la page à afficher
    $smarty->assign('title', 'Recherche');
    $smarty->assign('page', './recherche.tpl');

    // Appel des informations pour le filtre
    require_once('../SQL/meridien.php');
    $smarty->assign('data_meridien',$data_meridien);

    require_once('../SQL/type_patho.php');
    $smarty->assign('data_type_patho',$data_type_patho);

    // Appel des informations pour la page
    require_once('../SQL/pathologie.php');
    $smarty->assign('data_patho',$data_patho);

    // Affichage de la page
    $smarty->display('../../TPL/main_structure.tpl');
?>