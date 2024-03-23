<?php 
$db = new mysqli('localhost','root','','company_name');

?>

<table border="1" style="border-collapse: collapse;" > 
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Price</th>
		<th>Manufacturer</th>
		<th>Contact</th>
	</tr>
	<?php 
		$product = $db->query(" select * from viewt_product ");
		while(list($_id,$_name,$_price) = $product->fetch_row()){
			echo "<tr> 
					<td>$_id</td>
					<td>$_name</td>
					<td>$_price</td>
				</tr>";
		}
	
	?>
</table>





