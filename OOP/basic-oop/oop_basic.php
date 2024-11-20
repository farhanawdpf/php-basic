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

class drinks {
  // Properties
  public $name="bmw1";
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

$apple = new drinks();
$banana = new Fruit();
echo $apple->name;
echo $apple->info('sdsa');
// $banana->set_name('Banana');



?>
 