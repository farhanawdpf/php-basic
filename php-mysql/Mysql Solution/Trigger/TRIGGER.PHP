<?php
$db = new mysqli("localhost","root","","exam");

/*
$rs = $db->query("select id,name from manufacturer");

?>

<form action="" method="post">
Select Manufacturer : 
  <select name="mid">
  <?php 
  while($r = $rs->fetch_row()){
	echo "<option value='$r[0]'>$r[1]</option>";
  }
  ?>
  </select>
<input type="submit" name="submit" value="Delete" />
</form>
<?php
if(isset($_POST['submit']))
{
	$id = $_POST['mid'];
	$db->query("delete from manufacturer 
	            where id =$id");
}

*/
$db->query("delete from manufacturer where id=1");
?>