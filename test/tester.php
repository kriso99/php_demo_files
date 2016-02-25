<?php 

$veg= array('veg1','veg2','veg3');
$not= array('not1','not2','not3');
$counter=count($veg);
if (!isset($_POST['submit'])) {
	echo "Enter option";
	echo "<form action='tester.php' method='post'> ";
	echo "<p>Are you a Vegan?</p>";
	echo "<input type='radio' name='option' value='y'>Vegan";
	echo "<input type='radio' name='option' value='n'>Not Vegan";
	echo "<input type='submit' name='submit' value='submit'>";
	echo "</form>";
}else{
	$c = $_POST['option'];
	if ($c == 'y') {
		echo "<ul>";
		for ($i=0; $i < $counter ; $i++) { 
			echo "<li>".$veg[$i]."</li>";
		}
		echo "</ul>";
		
	}elseif ($c == 'n') {
		echo "<ul>";
		for ($k=0; $k < $counter ; $k++) { 
			echo "<li>".$not[$k]."</li>";
		}
		echo "</ul>";
	}
}
