<?php 
$c =array("ab","bc","ca","bd","rg","tk","ab","bc","ca",);
shuffle($c);

$h=array_chunk($c,2);
print_r($h);

?>