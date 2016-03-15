<?php 
$conn = mysqli_connect('localhost', 'root', '', 'foods');
// if(!$conn){
// 	die('Connection failed:'.mysqli_connect_error());
// }
// else {
// 	echo "Connected successfully!";
// }

$q 		= "SELECT * FROM products LIMIT 1";
$result = mysqli_query($conn, $q);

$row = mysqli_fetch_row($result);

var_dump($row);
// echo $row['products'];