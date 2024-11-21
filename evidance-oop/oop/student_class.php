<?php
//Step 1:
class Student{   
   private $id;
   private $name; 
   
   private static $file_path="data.txt"; 
   
   //---------------constructor---------------//
   function __construct($_id,$_name){
	   $this->id=$_id;
	   $this->name=$_name;
	
   }
  
  //---------------csv function-------------------//
   public function csv(){
	 return $this->id.",".$this->name.PHP_EOL;  //End Of Line or create new line 
   }
   
   //-----------save function-----------------//
   public function save(){
	   
	       $students=file(self::$file_path);  	   
	  	//The file() reads a file into an array.
		   file_put_contents(self::$file_path,$this->csv(),FILE_APPEND);
       //The file_put_contents() writes data to a file.
     // Use FILE_APPEND to avoid deleting the existing content of the file.
	   	   
	   
   }//end save	
       
   
   //---------------display_students-------------//
   
   public static function display_students(){
	   
	    $students=file(self::$file_path);
		
		echo "<b>ID | Name</b><br/>";
		foreach($students as $student){
				   list($id,$name)=explode(",",trim($student));
				   echo "$id | $name<br/>";   
	    }
				
		
   }   
   //The explode() function breaks a string into an array.
   //The list() function is used to assign values to a list of variables in one operation.
 //-----------------end functions----------------   

}// Student class

?>