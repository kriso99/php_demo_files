<?php 

// Задача 2. Дефинирайте функция, 
// която проверява колко от елементите в масив от цели числа, 
// са четни числа и колко са кратни на 7.  
function even_odd($param){
	$count = count($param);
	$even = 0;
	$div = 0;
	for($i = 0; $i < $count; $i++){
		if($param[$i]%2==0){
			$even++;
			if($param[$i]%7==0){
				$div++;
			}
				
			
		}
		elseif($param[$i]%7==0) {
			$div++;
		}

	}
	echo 'Even – '.$even.', Div 7 '.$div;
}