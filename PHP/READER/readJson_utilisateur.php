<?php


$data = json_decode(file_get_contents('./../../JSON/login_user.json'),true);
//echo($_POST['Deco']);
if (isset($_POST['Deco'])) {
    $_SESSION['Connexion_check'] = false;
    
}
if (isset($_POST['email'])){
    foreach ($data as $login){
        if (($_POST['email']==$login['email'])){
            if ($_POST['mdp']==$login['mdp']){
                $_SESSION['Connexion_check'] = true;
                $_SESSION['Connexion_failed'] = false;
                
            }
        }
        else {
            $_SESSION['Connexion_failed'] = true;
        }
    }
}


?>