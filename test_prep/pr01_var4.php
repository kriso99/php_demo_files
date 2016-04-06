<?php 

function str_code($str){
	$arr = explode(' ', $str);
	$count = count($arr);

	for($i = 0; $i < $count; $i++){
		//WORDS
		$curr_arr = str_split($arr[$i]);
		$curr_count = count($curr_arr);
		for($j = 0; $j < $curr_count; $j++){
			//LETTERS
			$pos = $j+1;
			if($pos%2==0){
				$curr_code = ord($curr_arr[$j]);
				$curr_code = $curr_code + 1;
			}
			else {
				$curr_code = ord($curr_arr[$j]);
				$curr_code = $curr_code - 1;
			}
			$curr_arr[$j] = chr($curr_code);
		}
		$arr[$i] = implode('', $curr_arr);
	}
	//CONVERT ARRAY TO STRING
	$str = implode(' ', $arr);
	echo $str;

}

$string = 'No pain no gain';
str_code($string);
echo ord('m');