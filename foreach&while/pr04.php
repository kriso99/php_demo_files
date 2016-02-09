<?php 
$arr = array(1, 10, 100, 56, 100);

$mult = 0;

foreach ($arr as $value) {
	$mult = $mult + $value;
	echo "<p>".$mult."</p>";
}