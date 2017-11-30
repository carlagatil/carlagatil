<?php

include('connect.php');
$brand = $_POST['brand'];
$qty = $_POST['qty'];
$price = $_POST['price'];
$food_category = $_POST['food_category'];
$sql = "INSERT INTO `gracedatabase`.`inventory_table` (`i_id`, `i_brand`, `i_qty`, `i_price`, `i_category`) VALUES (NULL, '$brand', '$qty', '$price', '$food_category')";

$result = $conn->query($sql);

header('Location: main.php');

?>