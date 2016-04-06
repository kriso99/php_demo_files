<?php 
function convert($p1, $p2){
	for($i = $p1; $i <= $p2; $i++){
		$res = chr($i);
		echo $res.' ';
	}
}
$start = 65;
$end = 90;

convert($start, $end);