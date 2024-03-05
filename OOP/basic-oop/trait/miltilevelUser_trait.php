<?php 
trait Main{ 
    public function info(){ 
        echo "This is main class"."<br>";
    }
}
trait Main2{ 
    public function info2(){ 
        echo "This is info 2 class"."<br>";
    }
    public function desplay(){ 
        echo "This is info show class"."<br>";
    }
}

trait Main3{ 
    public function info3(){ 
        echo "This is info 3 class"."<br>";
    }
}

class Child{ 
    use Main,Main3;
    public function save(){ 
        echo "This is child class";
    }
}

class Child2{ 
    use Main2,Main,Main3;
    public function run(){ 
        echo "This is last class";
    }
}

$m = new Child2();
$m->run();

$m->info2();

$m->desplay();

?>