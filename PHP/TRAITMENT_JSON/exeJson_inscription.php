<?php

require_once('../READER/readJson_inscription.php');

array_push($arrayTable, array('email' => $_POST['email_inscription'], 'mdp' => $_POST['mdp']));
$data = json_encode($arrayTable);
file_put_contents('./../../JSON/login_user.json',$data);
echo ok;

?>