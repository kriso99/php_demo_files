<?php 

function arr($param1, $param2){
$rows = $param1;
$cols = $param2;
$num2=0;
$arr = array(array());
for($i = 0; $i < $rows; $i++){
	$num = 0;	
for ($j=0; $j < $cols; $j++) { 
	$num++;		
	$arr[$i][$j] = $num + $num2*4;
}
$num2 ++;//1, 11, 111, 1111
$num2= $num2*10;//10, 110, 1110, 11110	
}
echo '<pre>';
var_dump($arr);
echo '</pre>';
}
arr(4, 6);
