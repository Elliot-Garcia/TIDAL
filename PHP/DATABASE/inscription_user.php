<?php 

if($_POST['email_inscription'] != NULL){
    if ($_POST['mdp'] != NULL){
    
        require_once('create_new_table.php');

        $sql_queri1 = "INSERT INTO public.user(email,mdp) VALUES ('{$_POST['email_inscription']}','{$_POST['mdp']}')";

        $db->query($sql_queri1);
    }
}

?>
