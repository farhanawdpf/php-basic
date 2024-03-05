<?php 
abstract class User{ 
    abstract public function getName();
    abstract public function info();
    public function desplay(){ 
        echo "third";
    }

}

class wdpf extends  User{ 
    public function getName(){ 
        echo "Done";
    }
    public function info(){ 
        echo "second";
    }
    public function desplay(){ 
        echo "third";
    }
}

$add = new wdpf;
$add->getName();
?>