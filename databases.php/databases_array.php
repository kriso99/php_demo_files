<?php 
$conn = mysqli_connect('localhost', 'root', '', 'foods');

if(!$conn){
	die('Connection failed:'.mysqli_connect_error());
}
// else {
// 	echo "Connected successfully!";
// }

$q 		= "SELECT * FROM products";
$result = mysqli_query($conn, $q);

if(mysqli_num_rows($result)>0){	
 	while($row = mysqli_fetch_assoc($result)){
 		//var_dump($row);
 		echo '<p>';
 		echo $row['product'].' ';
 		echo $row['gi'];
 		echo '</p>';
 	}
}

