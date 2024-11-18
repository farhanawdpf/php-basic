<?php
class Fruit {
  // Properties
  public $name="bmw";
  public $color="red";

  // Methods
  function info($name) {
    $this->name = $name;
    return $this->name."nn";
  }
//   function get_name() {
//     return $this->name;
//   }
}

$apple = new Fruit();
$banana = new Fruit();
echo $apple->info('Apple');
// $banana->set_name('Banana');



?>
 