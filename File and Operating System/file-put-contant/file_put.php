<?php
$file = 'people.txt';
// Open the file to get existing content
$current = file_get_contents($file);
// Append a new person to the file
$current .= "FArhana\n";
// Write the contents back to the file
file_put_contents($file, $current);
?>