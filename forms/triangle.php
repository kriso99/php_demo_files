<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>triangle</title>
</head>
<body>
<form action="triangle.php" method="get">
		ъгъл 1
		<input type="text" name="a" value="">
		ъгъл 2
		<input type="text" name="b" value="">
		ъгъл 3
		<input type="text" name="c" value="">
		<input type="submit" name="submit" value="check">
	</form>

	<?php 
	if (!empty($_GET['submit'])) {
		$a = $_GET['a'];
		$b = $_GET['b'];
		$c = $_GET['c'];
		$sum = $a +$b +$c;
		if ($sum == 180) {
			echo "Valid triangle";
		} else {
			echo "Not a valid triangle";
		}
	}

	?>
	
</body>
</html>