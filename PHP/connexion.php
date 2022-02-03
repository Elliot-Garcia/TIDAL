<?php
    $login=tidal;
    $mdp=tidal;
    try {
        $db = new PDO('host=localhost;bdname=aqdb', $login, $mdp);
    } catch (PDOException $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }
?>