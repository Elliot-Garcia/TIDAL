<?php

    require_once('../connexion.php');

    $sql = "SELECT * FROM public.user";
    
    if (isset($_POST['Deco'])) {
        $_SESSION['Connexion_check'] = false;
        $_SESSION['Connexion_failed'] = false;
    }
    if (isset($_POST['email'])){
        foreach ($db->query($sql) as $row){
            if (($_POST['email']==$row['email'])){
                if ($_POST['mdp']==$row['mdp']){
                    $_SESSION['Connexion_check'] = true;
                    $_SESSION['Connexion_failed'] = false;
                }
            }
            else {
                $_SESSION['Connexion_failed'] = true;
            }
        }
    }



/*
    $sql = "SELECT * FROM public.user";

    foreach($db->query($sql) as $row){
        print $row['email'].'-'.$row['mdp'].'<br/>';

    }
*/

?>