<?php 
abstract class User{ 
    abstract public function getName();
  
    public function desplay(){ 
        echo "third";
    }

}

class wdpf extends  User{ 
    public function getName(){ 
        echo "Done";
    }
  
    public function desplay(){ 
        echo "third";
    }
}
class we extends  User{ 
    public function getName(){ 
        echo "Done2";
    }
  
    public function desplay(){ 
        echo "third";
    }
}


$add = new we;
$add->getName();
?>