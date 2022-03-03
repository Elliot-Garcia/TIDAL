<?php

    $table = file_get_contents('login_user.json');
    echo $table;
    $arrayTable = json_decode($table);

?>