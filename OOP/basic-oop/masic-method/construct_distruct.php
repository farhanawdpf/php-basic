<?php 
class Car{ 
public $name;
public $model="e01";
function __destruct(){ 
    echo "<br>bye";
}
 function info(){ 
    echo "this is info method";
 }
function __construct($name){ 
    echo "this is construct function.";
}
 
}
// $newObj=new Car();
// echo "<br>";
//  $newObj->info();
//  echo "<br>";
 class Bike extends Car { 
    public $color="red";
    function __construct($name){ 
        echo ",this is child construct <br>".$this->name=$name;
    }
    public function details(){ 
        echo "this is child method";
    }
     function info(){ 
        echo "this is info method";
    }
 }

 $bikeObj=new Bike("Honda");
 $bikeObj->details();
 $bikeObj->info();
 echo "<br>";
 echo $bikeObj->color;
 echo "<br>";
//  echo $bikeObj->name;
 echo "<br>";
?>