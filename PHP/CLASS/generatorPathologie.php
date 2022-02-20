<?php

require_once('../connexion.php');
require_once("./../READER/readJson_carac.php");
require_once("./../READER/readJson_type.php");

require_once("./../CLASS/classPathologie.php");

require_once("./../SQL/pathologie.php");
$instances_pathos = array();

foreach ($data_patho as $patho) {
    array_push($instances_pathos, new Pathologie($patho['idp'], $patho['desc'], $db, $caracs, $types_patho));
}
?>