<?php 
$str = 'a';
$n = 20;
for ($i=0; $i < $n; $i++) { 
	echo "<p>";
	for ($j=0; $j < $i ; $j++) { 
		echo $str;
	}
	echo "</p>";
}