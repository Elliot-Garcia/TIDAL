<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');
    require_once('../READER/readJson_inscription.php');
    require_once('../READER/readJson_utilisateur.php');
    // Init Smarty
    $smarty = new Smarty();
    echo $_SESSION['Connexion_check'];
    $smarty->assign('title', 'Bibliographie');
    $smarty->assign('page', './bibliographie.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>