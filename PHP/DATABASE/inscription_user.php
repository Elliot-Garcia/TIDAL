<?php 

if(isset($_POST['email_inscription'])){
    
    require_once('../connexion.php');

    $sql_queri1 = "INSERT INTO public.user(email,mdp) VALUES ('{$_POST['email_inscription']}','{$_POST['mdp']}')";

    $db->query($sql_queri1);

}

?>