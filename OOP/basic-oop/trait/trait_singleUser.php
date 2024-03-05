<?php 
trait Main{ 
    public function info(){ 
        echo "This is main class"."<br>";
    }
}

class Child{ 
    use Main;
    public function save(){ 
        echo "This is child class";
    }
}

$m = new Child();
$m->info();
$m->save();

?>