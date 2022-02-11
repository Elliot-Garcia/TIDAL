<?php

session_start();
var_dump($_SESSION);
if ($_POST['login']==$mdp)
    $_SESSION['user']= 'Bob';



?>