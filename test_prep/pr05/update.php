<?php 
$conn = mysqli_connect('localhost', 'root', '', 'medicines');
if(empty($_GET['submit'])){
	$med_id = $_GET['id'];

	$q = "SELECT * FROM meds WHERE med_id = $med_id";
	$res = mysqli_query($conn, $q);
	$row = mysqli_fetch_assoc($res);



	echo "<form method='get' action='update.php'>";
	echo "<input type='hidden' name='med_id' value='".$row['med_id']."'>";
	echo "<input type='text' name='med_name' value='".$row['med_name']."'>";
	echo "<input type='submit' name='submit' value='submit'>";
	echo "</form>";
}
else {
	$med_id = $_GET['med_id'];
	$med_name = $_GET['med_name'];


	$update_query = "UPDATE meds 
					SET med_name ='$med_name' 
					WHERE med_id=$med_id";
					
	$update_result= mysqli_query($conn, $update_query);

	if ($update_result) {
 				//success code can be read db query - 
 				//you can print the entire info + your newly update db query 
		
 				//it depends on you and UI you have designed ...
 				//the same is with unseccess code

 				//IT IS A GOOD PRACTICE YOU AND USER TO KNOW EXACTLY WHAT THE RESULT IS - SUCCESS OR NOT
		echo "Успешно променихте $med_name в базата данни!";
		echo "<p><a href='read.php'>Read DB</a></p>";
	}else{
		echo "Неуспешна промяна на запис в базата данни! Моля опитайте по-късно!";
		echo "<p><a href='#'>link to somewhere ... </a></p>";
	}
}
