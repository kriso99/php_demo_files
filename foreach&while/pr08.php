<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
	p {
		color: red;
		background-color: #ccc;
	}
	span.green{
		color: green;
	}
	span.red{
		color: white;
	}
	</style>
</head>
<body>
	<?php 
$text = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia enim culpa, odio dignissimos ab commodi eos sunt at, voluptates quos illo nobis architecto amet nesciunt. Tempore voluptates architecto cumque illo!';
$res = explode(' ', $text);
$count = count($res);
echo "<p>";
for($i = 0; $i < $count; $i++){
	if (($i+2) % 3 == 0) {
		echo "<span class='green'> ".$res[$i]."</span>";
	} elseif (($i+1) % 3 == 0) {
		echo "<span class='red'> ".$res[$i]."</span>";
	}
	else {
		echo " ".$res[$i];
	}
}
echo "</p>";
?>
</body>
</html>