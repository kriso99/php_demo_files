<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hotels');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
//MIND THAT NOT ALL OF THE HOTELS HAVE INFO ABOUT THE CITIES!!
//lOOK HOW THIS QUERY LOOKS LIKE IN PHPMYADMIN
$q = "SELECT * FROM hotels JOIN cities ON hotels.id_city=cities.id_city";
$res = mysqli_query($conn, $q);

//or table
echo "<table border=1>";
if (mysqli_num_rows($res) > 0) {

	while($row = mysqli_fetch_assoc($res)){ 
		echo "<tr>";
		echo '<td>'.$row['hotel_name'].'</td>';
		echo '<td>'.$row['city_name'].'</td>';
		echo '<td>'.$row['hotel_description'].'</td>';
		echo '<td>'.$row['rooms_quantity'].'</td>';
		
		//for U D purpose we need update and delete buttons/links
		//we also need $row['id_city'] to know exactly which row of the table to 
		//update or to delete
		echo ' '.'<td><a href="update.php?id='.$row['hotel_id'].'">Edit</a></td>';
		echo ' '.'<td><a href="delete.php?id='.$row['hotel_id'].'">Delete</a></td>';	
		echo "</tr>";	
	}

}
echo "</table>";