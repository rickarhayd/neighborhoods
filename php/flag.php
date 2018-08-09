<?php
include 'Z:/Neighborhood/php/cartodbProxy.php';
//      ^CHANGE THIS TO THE PATH TO YOUR cartodbProxy.php
$q = "update hoods set flag = true where cartodb_id = " . $_POST['id'];
$return = goProxy($q);
echo $return;
?>
