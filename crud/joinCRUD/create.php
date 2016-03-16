<?php 
$conn = mysqli_connect('localhost', 'root', '', 'hotels');

// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
if(empty($_POST['submit'])){
//IN ADVANCE SELECT FROM DB 
	//CITIES FOR INPUT TYPE SELECT
	$q 		= "SELECT * FROM cities WHERE date_deleted IS NULL";
	$res 	= mysqli_query($conn, $q);
	

	echo "<h3>Insert hotel info</h3>";
	echo "<form action='create.php' method='post'>";

	echo "<p>Insert hotel name</p>";
	echo "<input type='text' name='hotel_name'>";

//RETRIEVING INFO FROM CITIES TABLE IN DB
	echo "<p>Select city</p>";
	echo "<select name='id_city'>";
	
	if (mysqli_num_rows($res) > 0) {
		while($row = mysqli_fetch_assoc($res)){ 
			echo '<option value="'.$row['id_city'].'"';
			if($row['city_name']==='--'){echo 'selected="--"';}

			echo '>'.$row['city_name'].'</option>';

		}
	}
	echo "</select>";

	echo "<p>Insert hotel description</p>";	
	echo "<textarea name='hotel_description'></textarea>";

	echo "<p>Insert rooms quantity</p>";		
	echo "<input type='text' name='rooms_quantity'>";

	echo "<p><input type='submit' name='submit' value='insert'></p>";
	echo "</form>";
}
else{
//city_name!!! same as in the DB!!!	
	$hotel_name 		= $_POST['hotel_name'];
	$id_city 			= $_POST['id_city'];
	$hotel_description 	= $_POST['hotel_description'];
	$rooms_quantity 	= $_POST['rooms_quantity'];
		//you can shorten var names - $insert_query - $q or smth else

	$insert_query = 	"INSERT INTO hotels(hotel_name, id_city, hotel_description, rooms_quantity) 
						VALUES ('$hotel_name', '$id_city', '$hotel_description', $rooms_quantity)";
			//or $result
	$insert_result= mysqli_query($conn, $insert_query);

	if ($insert_result) {
				//success code can be read db query - 
				//you can print the entire info your newly inserted in the db query 
				//is appended to
				//it depends on you and UI you have designed ...
				//the same with unseccess code=
		echo "Успешно добавихте запис в базата данни!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
	}
}