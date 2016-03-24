<?php 
// Дефинирайте функция, 
// която проверява дали сумата на 
// елементите в даден масив е четно число. 
// В зависимост от резултата от 
// проверката дава отговор – “ODD” или “EVEN”. 
// Извикайте функцията за два различни масива. 4т.

function odd_even($param){
	$count = count($param);
	$sum = 0;

	for($i = 0; $i < $count; $i++){
		$sum+=$param[$i];
	}

	if($sum%2 === 0){
		echo "even";
	}
	else {
		echo "odd";
	}
}

 function arr_gen($el){
	for($j = 0; $j < $el; $j++){
		$arr[$j] = rand(1, 20);
		}
var_dump($arr);
		return $arr;
		
}

//$arr = [2, 2, 6, 8, 9, 10];
$arr = arr_gen(5);
odd_even($arr);
