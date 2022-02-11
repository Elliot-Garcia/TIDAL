<?php

session_start();

/*$json = '{
    "mdp": "michel",
    "email": "baptiste@michel.LJ"
}';*/

$data = json_decode(file_get_contents('./../../JSON/login_user.json'),true);

print_r($data[0]["mdp"]);

foreach ($data as $login){
    if (($_POST['email']==$login['email'])){
        if ($_POST['mdp']==$login['mdp']){
            $_SESSION['Connected'] = TRUE;
            echo 'bien mon chien' ;
        }
    }
}

/*
if (($_POST['mdp']==$data["mdp"])&&($_POST['email']==$data['email']))
    echo 'bien mon chien' ;
*/
?>