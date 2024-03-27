<html>
<body>
<form action="" method="post">
Username:<input type="text" name="username"/><br />
Password:<input type="password" name="pass"/><br />
<input type="submit" name="check" value="check"/>
</form>
<?php



if(isset($_POST['check']))

{
	$mysqli=new mysqli("localhost","root","","profile");
	$rs = $mysqli->query("SELECT username,password from user"); 
	$u = $_POST['username'];
	$p = $_POST['pass'];
	while ($r=$rs->fetch_row())
	{
		
		if($r[0]==$u and $r[1]==$p)
		{
			
			echo "Valid user";
			exit;	
		}
	}

	echo "Invalid user";
}

?>
</body>
</html>