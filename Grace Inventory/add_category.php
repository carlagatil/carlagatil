<?php 

include('connect.php');
$categ = $_POST['categ'];

$sql = "INSERT INTO `categories` (`category_name`) VALUES ('$categ');";
$result = $conn->query($sql);
header('Location: main.php');
 ?>