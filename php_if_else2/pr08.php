<?php 

$a = rand(7, 70);

echo $a.' years';

if ($a <= 18) {
	echo "<p>Go to school!</p>";
} elseif ($a > 18 && $a <= 65) {
	echo "<p>Go to work!</p>";
} else {
	echo "<p>Retire!</p>";
}
