<?php
//you can include the db connection code in separate file
//and include this file
$conn = mysqli_connect('localhost', 'root', '', 'hotels');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}

$read_query 	="SELECT * FROM hotels LEFT JOIN cities
			 	ON hotels.id_city=cities.id_city
			 	WHERE hotels.date_deleted IS NULL ";

$read_result = mysqli_query($conn, $read_query);

//or table
echo "<table border = 1>";
echo '<tr>';
		echo '<td>hotel name</td>';
		echo '<td>city</td>';
		echo '<td>hotel description</td>';
		echo '<td>quantity</td>';
		echo '<td></td>';
		echo '<td></td>';
		echo '</tr>';
	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<tr>';
		echo '<td>'.$row['hotel_name'].'</td>';
		echo '<td>'.$row['city_name'].'</td>';
		echo '<td>'.$row['hotel_description'].'</td>';
		echo '<td>'.$row['rooms_quantity'].'</td>';
		//for U D purpose we need update and delete buttons/links
		//we also need $row['id_city'] to know exactly which row of the table to 
		//update or to delete
		echo '<td><a href="update.php?id='.$row['hotel_id'].'">Edit</a></td>';
		echo '<td><a href="delete.php?id='.$row['hotel_id'].'">Delete</a></td>';
		echo '</tr>';
		}
	}
echo "</table>";