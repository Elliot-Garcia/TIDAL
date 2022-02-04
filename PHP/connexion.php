<?php
    $login='pgtidal';
    $mdp='tidal';
    try {
        $db = new PDO('host=localhost;dbname=acudb', $login, $mdp);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>