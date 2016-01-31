<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form</title>
</head>
<body>
<form action="form_input.php" method="post">
		<select name="level" id="level">
			<option value="0">---</option>
			<option value="Freshmen">Freshmen</option>
			<option value="2">Sophomore</option>
			<option value="3">Junior</option>
			<option value="4">Senior</option>
			<option value="5">Graduate</option>
		</select>
		<input type="radio" name="concentration" value="CS">CS
		<input type="radio" name="concentration" value="IS">IS
		<input type="radio" name="concentration" value="IT">IT
		<input type="checkbox" name="shoes" value="true">
		<input type="checkbox" name="skirts" value="true">
		<input type="checkbox" name="dresses" value="true">
		<input type="checkbox" name="hats" value="true">
		<input type="checkbox" name="coats" value="true">
		<input type="submit" value="submit">
	</form>
	<?php 
	if (!empty($_POST)) {
		echo "<pre>";
		var_dump($_POST);
		echo "</pre>";
	}
	?>
</body>
</html>