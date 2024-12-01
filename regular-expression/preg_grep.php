<?php

$foods = array("pasta","steak","fish","potatoes","potato","political","nopay");
$filtered_array = preg_grep("/^p/",$foods);

print_r ($filtered_array);



?>