<?php 
		
		//kal + gi+ fats +prot

$arr = array(
	array('food1', 10, 20, 30, 40),
	array('food2', 15, 20, 25, 30),
	array('food3', 12, 22, 32, 42),
	array('food4', 18, 2, 37, 47),
	array('food5', 15, 25, 35, 45),
	);

	//ХК = (ГИ2+(Мазнини+Белтъчини))/(Калории*2)
$hk = 0;
$count = count($arr);
for($i = 0; $i <$count; $i++){
$hk =.....
$arr[$i][5] = $hk;
}
$sum = 0;
for($j = 0; $j<$count; $j++){
$sum += $arr[$i][5];
}

$sum_avg = $sum/$count;

$min = $arr[0][2];
$index_min = 0; 

for($k = 1; $k<$count; $k++){
	if($min > $arr[$k][2]){
		$min = $arr[$k][2];
		$index_min = $k;
	}
}

echo 'Min is '.$arr[$index_min][2];

