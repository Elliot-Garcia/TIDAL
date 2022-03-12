<?php

require_once('../connexion.php');
$sql="CREATE TABLE public.User (email character varying(100) NOT NULL, mdp character varying(100)  NOT NULL)";
$db->query($sql);


?>