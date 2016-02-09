<?php 
$arr = array();
for ($i=0; $i < 10; $i++) { 
	$arr[$i] = rand(1, 100);
}

echo "<pre>";
var_dump($arr);
echo "</pre>";