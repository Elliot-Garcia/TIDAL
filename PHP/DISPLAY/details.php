<?php
    require_once('/usr/share/php/smarty3/Smarty.class.php');

    $smarty = new Smarty();

    $idp = $_GET['idp'];
    $pathos = $_SESSION['pathos'];
    $patho = array_search($idp, array_column($pathos, 'idp'));
    $smarty->assign('patho',$patho);

    $titre = 'Détails Pathologie';
    $smarty->assign('title', $titre);
    $smarty->assign('page', './details.tpl');
    $smarty->display('../../TPL/main_structure.tpl');
?>