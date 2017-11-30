<?php 

$server= "localhost";
$user = "root";
$pass = "";
$dbname = "gracedatabase";

$conn = new mysqli($server,$user,$pass, $dbname);

$sql = "SELECT * FROM `inventory_table`";
$result = $conn->query($sql);


?>

