<?php

session_start();

if(isset($_POST['email_inscription'])){


    $table = file_get_contents('./../../JSON/login_user.json');
    $arrayTable = json_decode($table);
    array_push($arrayTable, array('email' => $_POST['email_inscription'], 'mdp' => $_POST['mdp']));
    $data = json_encode($arrayTable);
    file_put_contents('./../../JSON/login_user.json',$data);

}

?>