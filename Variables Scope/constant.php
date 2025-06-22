<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constant </title>
</head>
<body>
    <h1>Constant </h1>

    <?php 
       define('ANIMALS', array(
    'dog',
    'cat',
    'bird'
));
echo ANIMALS[1]; // outputs "cat"
echo ANIMALS[2]; // outputs "cat"


echo "<br>";
echo "<br>";
echo "<br>";
const CONSTANT = 'Hello World';
// const CONSTANT = 'Hello';//already define

echo CONSTANT;

const ANOTHER_CONST = CONSTANT.'; Goodbye World';
echo ANOTHER_CONST;

?>

<?php
define("CONSTANT", "Hello world.");
echo CONSTANT; // outputs "Hello world."
echo Constant; // Emits an Error: Undefined constant "Constant"
               // Prior to PHP 8.0.0, outputs "Constant" and issues a warning.
?>

</body>
</html>