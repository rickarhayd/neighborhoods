<?php
include 'Z:/Neighborhood/php/cartodbProxy.php';
//      ^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "update hoods set loved = loved " .$_POST['op'] . " where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
