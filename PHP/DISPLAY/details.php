<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    require_once('../connexion.php');
    session_start();
    require_once("./../READER/readJson_carac.php");
    require_once("./../READER/readJson_type.php");
    require_once('../CHECK_CO/check_connexion.php');

    
    

    // Init page d'accueil
    $smarty = new Smarty();

    $smarty->assign('connect', $connect);

    $idp = $_GET['idp'];
    require_once("./../CLASS/classPathologie.php");

    $smarty->assign('patho', new Pathologie($idp, null, $db, $caracs, $types_patho));

    $titre = 'Détails Pathologie';
    $smarty->assign('title', $titre);
    $smarty->assign('page', './details.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>