<?php

require_once("./classPathologie.php");

require_once("./../SQL/pathologie.php");
$data_patho = array();

foreach ($idp_patho as $idp) {
    array_push($data_patho, new Pathologie($value));
}
?>