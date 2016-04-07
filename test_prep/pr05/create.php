<?php 
$conn = mysqli_connect('localhost', 'root', '', 'medicines');
// if (!$conn) {
// 	die("Connection failed: " .mysqli_connect_error());
// 	} else {
// 	echo "Connected successfully !";
// 	}
if(isset($_GET['submit'])){
	$med_name = $_GET['med_name'];

	$insert_query = 	"INSERT INTO meds (med_name) 
						VALUES ('$med_name')";
			
			$insert_result= mysqli_query($conn, $insert_query);
			if ($insert_result) {
				//success code can be read db query - 
				//you can print the entire info your newly inserted in the db query 
				//is appended to
				//it depends on you and UI you have designed ...
				//the same with unseccess code=
				echo "Успешно добавихте $med_name в базата данни!";
				echo "<p><a href='read.php'>Read DB</a></p>";
			}else{
				echo "Неуспешно добавяне на запис в базата данни! Моля опитайте по-късно!";
			}

}
else {
	echo "<form method='get' action='create.php'>";
	echo "<input type='text' name='med_name'>";
	echo "<input type='submit' name='submit' value='submit'>";
	echo "</form>";
}