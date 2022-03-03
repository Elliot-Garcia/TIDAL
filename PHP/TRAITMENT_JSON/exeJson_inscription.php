<?php

require_once('../PHP/READER/readJson_inscription.php');

if(isset($_POST['email_inscription'])){
    echo $_POST['email_inscription'];
    array_push($arrayTable, array('email' => $_POST['email_inscription'], 'mdp' => $_POST['mdp']));
    $data = json_encode($arrayTable);
    file_put_contents('login_user.json',$data);

}

?>