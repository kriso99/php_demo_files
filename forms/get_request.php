<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>get request</title>
</head>
<body>
	<form action="get_request.php" method="get">
	name
		<input type="text" name="first_name">
		age
		<input type="number" name="age" value="">
		<input type="submit" name="submit" value="submit">		
	</form>	
	<?php 
	if (!empty($_GET['submit'])) {
		/*echo 'First name'.$_GET['first_name'];
		echo 'Age '.$_GET['age'];*/
		var_dump($_GET);
	}	
	?>
</body>
</html>