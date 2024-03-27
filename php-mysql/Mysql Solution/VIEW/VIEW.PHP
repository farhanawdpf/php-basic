<?php

$db = new mysqli("localhost","root","","exam");
$rs = $db->query("select * from select_product");
while($r = $rs->fetch_row())
    echo "$r[0]\t$r[1]\t$r[2]\t$r[3]<br>"; 

?>