<?php 

function sum_arr_elements($p){
	$arr = $p;
	$count = count($arr);
	$sum = 0;
	for ($i=0; $i <$count; $i++) { 
		echo $arr[$i];
	}
	for ($j=0; $j <$count; $j++) { 
		if($j%2==0){
			$sum+= $arr[$j];
		}
	}
	echo $sum;
}
$numbers = array(1, 5, 8, 9, 10, 8, 3);
$numbers2 = array(6, 15, 8, 36, 25);

sum_arr_elements($numbers);
sum_arr_elements($numbers2);