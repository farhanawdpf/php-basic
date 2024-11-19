<?php 
class User{ 
    const name="Hello world!"."<br>";
    
public static function info(){ 
   echo "This is static method <br>";
}
}

// $person =new User;
echo User::name;
echo User::info();
echo User::$name="my world";
// echo $person->name="my world";
?>