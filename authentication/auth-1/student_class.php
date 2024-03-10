<?php
//Step 1:
class Student{   
   private $id;
   private $name;
   private $email;
   private $phone;  
 
   //---------------constructor---------------//
   function Student($_id,$_name,$_email,$_phone){
	   $this->id=$_id;
	   $this->name=$_name;
	   $this->email=$_email;
	   $this->phone=$_phone;
    }
  
   //---------------csv function-------------------//
   public function csv(){
	 return $this->id.",".$this->name.",".$this->email.",".$this->phone.PHP_EOL;   
   }
   
   //-----------save function-----------------//
   public function save(){
		file_put_contents("data.txt",$this->csv(),FILE_APPEND);
	   
   }//end save	
       
   
   //---------------display_students-------------//
   public static function display_students(){
	    $students=file("data.txt");
		echo "<b>ID | Name | email | PHONE</b><br/>";
		foreach($students as $student){
				   list($id,$name,$email,$phone)=explode(",",trim($student));
				   echo "$id | $name | $email | $phone<br/>";
				   
	    }
				
		
   }   
   
 //-----------------end functions----------------   

}// Student class

?>