<?php 

include('connect.php');
$sql = "SELECT * FROM `inventory_table` WHERE `i_category` = 'Drinks'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {
	echo "
	<tr>
		<td>".$row['i_brand']."</td>
		<td>".$row['i_qty']."</td>
		<td>".$row['i_price']."</td>
	</tr>
	";
}

 ?>