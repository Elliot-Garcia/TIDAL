<?php
    $login='pgtidal';
    $mdp='tidal';
    try {
        $db = new PDO('host=localhost;bdname=acudb', $login, $mdp);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>