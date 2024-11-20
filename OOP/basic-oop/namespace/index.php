<?php
require "user.php";
require "car.php";
require "student.php";

use Rafi\User;
use Ali\Car;
use Razib\User2;


$object = new Car();
$object->info();
echo "<br>";
$obj = new User();
$obj->show();
echo "<br>";
$ob = new User2();
$ob->display();



