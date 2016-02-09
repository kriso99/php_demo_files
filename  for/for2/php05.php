<?php 
$arr = array();

for ($i=0; $i < 100 ; $i++) { 
	$arr[$i] = rand(1, 1000);
	echo $arr[$i].' ';
}
$count = count($arr);

echo "Array elements count " . $count;