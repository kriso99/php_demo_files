<?php 
$n = 1;
for ($j=0; $j < 30 ; $j++) { 
	$num = ($j+1);
	echo "<p>$num - row - ";
	for ($i=1; $i <=10; $i++) { 
		echo $n.' ';
		$n++;
	}
	echo "</p>";
}

