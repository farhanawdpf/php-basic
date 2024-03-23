<?php

// try {
//     tryStatements
//   } catch (exceptionVar) {
//     catchStatements
//   } finally {
//     finallyStatements
// }


$a = 40;
try{ 
if ($a>30){ 
 throw new Exception("Invalid Number"); 
}else { 
    throw new Exception("Valid Number");
}
}
catch(Exception $e){ 
    echo "Your error is:".$e->getMessage()."<br>";
}
finally{ 
    echo "This is finally done my work";
}
?>