<?php

include('connect.php');
$brand = $_POST['e_brand'];
$qty = $_POST['e_qty'];
$price = $_POST['e_price'];

$sql = "UPDATE `inventory_table` SET `i_qty` = '$qty', `i_price` = '$price' WHERE `inventory_table`.`i_brand` = '$brand';";

$result = $conn->query($sql);

header('Location: main.php');

?>