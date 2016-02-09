<?php 
$x = 1;
$n = 100;

echo "<ul><li>";
while ($x <= $n) {
	
	echo $x." ";
	
	if (($x+1) % 10 == 0) {
		echo "</li><li>";
	}
	$x+=2;

}
echo "</li></ul>";