<?php


if(isset($_POST['email_inscription'])){

    $table = file_get_contents('./../../JSON/login_user.json');
    $arrayTable = json_decode($table);
    echo yess;
}
echo salut;

?>