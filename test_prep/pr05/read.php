<?php 
$conn = mysqli_connect('localhost', 'root', '', 'medicines');

$read_query = "SELECT * FROM meds 
				WHERE date_deleted IS NULL";

$read_result = mysqli_query($conn, $read_query);

echo "<ul>";
	if (mysqli_num_rows($read_result) > 0) {
		while($row = mysqli_fetch_assoc($read_result)){ 
		echo '<li>'.$row['med_name'];
		
		echo ' '.'<a href="update.php?id='.$row['med_id'].'">Edit</a>';
		echo ' '.'<a href="delete.php?id='.$row['med_id'].'">Delete</a>';

		echo '</li>';
		}
	}
echo "</ul>";