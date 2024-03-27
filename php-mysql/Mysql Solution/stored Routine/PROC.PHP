<?php

$db = new mysqli("localhost","root","","exam");
$rs = $db->query("call insert_manu('rres','Mirpur','0193747344')");

?>