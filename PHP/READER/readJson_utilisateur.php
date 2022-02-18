<?php

session_start();

$data = json_decode(file_get_contents('./../../JSON/login_user.json'),true);
//echo($_POST['Deco']);
if (isset($_POST['Deco'])) {
    $_SESSION['Connexion_check'] = false;
} else {
    foreach ($data as $login){
        if (($_POST['email']==$login['email'])){
            if ($_POST['mdp']==$login['mdp']){
                $_SESSION['Connected'] = true;
                $_SESSION['Connexion_check'] = true;
                echo 'bien mon chien' ;
            }
        }
    }
}



?>