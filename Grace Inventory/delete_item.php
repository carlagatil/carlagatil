<?php

include('connect.php');
$brand = $_POST['d_brand'];
$sql = "DELETE FROM `inventory_table` WHERE `inventory_table`.`i_brand` = '$brand';";

$result = $conn->query($sql);

header('Location: main.php');

?>