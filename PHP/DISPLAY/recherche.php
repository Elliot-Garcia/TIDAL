<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    session_start();
    require_once('../CHECK_CO/check_connexion.php');


    // Init page d'accueil
    $smarty = new Smarty();

    //test connexion
    $smarty->assign('connect', $connect);

    
    // Configuration de la page à afficher
    $smarty->assign('title', 'Recherche');
    $smarty->assign('page', './recherche.tpl');

    // Appel des informations pour le filtre
    require_once('../SQL/meridien.php');
    $smarty->assign('data_meridien',$data_meridien);

    require_once('../READER/readJson_type.php');
    $smarty->assign('types_patho',$types_patho);
    
    require_once('../READER/readJson_carac.php');
    $smarty->assign('data_caracs',$caracs);

    // Appel des informations pour la page
    require_once('../CLASS/generatorPathologie.php');
    $smarty->assign('instances_pathos',$instances_pathos);

    // Affichage de la page
    $smarty->display('../../TPL/main_structure.tpl');
?>