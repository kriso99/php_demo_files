<?php 
$x = 1;
$n = 30;
echo "<p>";
while ($x <= $n) {
	echo $x.' ';
	if ($x % 10 == 0) {
		echo '</p><p>';
	}
	$x++;
}
echo "</p>";