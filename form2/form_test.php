<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>form test</title>
</head>
<body>
<form action="form_test.php" method="post">
	username<input type="text" name="username">
	password <input type="password" name="password">
	<input type="submit" name="submit" value="login">
</form>
<?php 
echo "<pre>";
var_dump($_POST);
echo "</pre>";
if (!empty($_POST['submit'])) {
	echo $_POST['username'];
}

?>
</body>
</html>

