<?php 
// object system
// $hostname = "localhost";
// $user = "root";
// $password = "";
// $dbname = "db_name1";
// $conn = new mysqli($hostname,$user,$password,$dbname);
// if($conn->connect_error){ 
// die("Connection Failed.".$conn->connect_error);
// }
// echo "connection succefully";


// procedural way

$hostname = "localhost";
$user = "root";
$password = "";
$dbname = "db_name";
$conn = mysqli_connect($hostname,$user,$password,$dbname);
if(!$conn){ 
die("Connection Failed.");
}
echo "connection succefully";
?>