<?php
    $login='pgtidal';
    $mdp='tidal';
    try {
        $dbh = new PDO('host=localhost;bdname=acudb', $login, $mdp);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>