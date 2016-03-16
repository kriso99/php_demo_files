<?php
//you can include the db connection code in separate file
//and include this file
$conn = mysqli_connect('localhost', 'root', '', 'hotels');
// if (!$conn) {
//  	die("Connection failed: " .mysqli_connect_error());
//  	} else {
//  	echo "Connected successfully !";
//  	}

if(empty($_POST['submit'])){

	$id_hotel = $_GET['id'];

//FIRST QUERY

	$q 		= "SELECT * FROM hotels 
			LEFT JOIN cities ON hotels.id_city=cities.id_city 
			WHERE hotels.hotel_id=$id_hotel";
	$res = mysqli_query($conn, $q);
	$row = mysqli_fetch_assoc($res);

//form is exactly the same as in create.php
//MIND THE VALUES!!! AND HIDDEN INPUT TYPE
	echo "<p>Edit the hotel info</p>";
	echo "<form action='update.php' method='post'>";
	//! we need it to transfer the id of the updated row
	echo "<input type='hidden' name='id_hotel' value=".$row['hotel_id'].">";

	
	echo "<p>Edit hotel name</p>";
	echo "<input type='text' name='hotel_name' value=".$row['hotel_name'].">";

//RETRIEVING INFO FROM CITIES TABLE IN DB
	echo "<p>Change city</p>";
	echo "<select name='id_city'>";
	//!! FOR TEST PURPOSES
	
	//!!!!!!!!!!
	//SECOND QUERY
	$q_cities 		= "SELECT * FROM cities WHERE date_deleted IS NULL";
	$res_cities 	= mysqli_query($conn, $q_cities);

	if (mysqli_num_rows($res_cities) > 0) {
		while($row_cities = mysqli_fetch_assoc($res_cities)){ 			
			echo '<option value="'.$row_cities['id_city'].'"';
			if($row_cities['id_city']===$row['id_city']){echo 'selected='.$row_cities['id_city']."'";}
			echo '>'.$row_cities['city_name'].'</option>';
		}
	}
	echo "</select>";

	echo "<p>Change hotel description</p>";	
	//!!!!!!!!!!!!!!!!!!!!!!
	echo "<textarea name='hotel_description' value=".$row['hotel_description'].">".$row['hotel_description']."</textarea>";

	echo "<p>Change rooms quantity</p>";		
	echo "<input type='text' name='rooms_quantity' value=".$row['rooms_quantity'].">";

	echo "<p><input type='submit' name='submit' value='EDIT'></p>";
	echo "</form>";
}else {
	//!!!!!!!!!!!
	$hotel_id			= $_POST['id_hotel'];
	$hotel_name 		= $_POST['hotel_name'];
	$id_city 			= $_POST['id_city'];
	$hotel_description 	= $_POST['hotel_description'];
	$rooms_quantity 	= $_POST['rooms_quantity'];
	
	$update_query = "UPDATE hotels 
					SET hotel_name = '$hotel_name',
					id_city = $id_city,
					hotel_description = '$hotel_description',
					rooms_quantity = $rooms_quantity
					WHERE hotel_id = $hotel_id";
					
	$update_result= mysqli_query($conn, $update_query);

	if ($update_result) {
 				//success code can be read db query - 
 				//you can print the entire info + your newly update db query 
		
 				//it depends on you and UI you have designed ...
 				//the same is with unseccess code

 				//IT IS A GOOD PRACTICE YOU AND USER TO KNOW EXACTLY WHAT THE RESULT IS - SUCCESS OR NOT
		echo "Успешно променихте запис в базата данни!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}

}
