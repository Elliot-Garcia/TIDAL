<?php

session_start();

/*$json = '{
    "mdp": "michel",
    "email": "baptiste@michel.LJ"
}';*/

$data = json_decode(file_get_contents('./../../JSON/login_user.json'),true);
$_SESSION['Connected'] = False;

echo($_POST['mdp']);

    //file_put_contents('./../../JSON/login_user.json',$_POST['mdp']);

foreach ($data as $login){
    if (($_POST['email']==$login['email'])){
        if ($_POST['mdp']==$login['mdp']){
            $_SESSION['Connected'] = true;
            echo 'bien mon chien' ;
        }
    }
}



/*
if (($_POST['mdp']==$data["mdp"])&&($_POST['email']==$data['email']))
    echo 'bien mon chien' ;
*/
?>