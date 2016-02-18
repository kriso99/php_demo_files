<?php 
$cars = array( array('brand'=>'Volvo', 'color'=>'blue',  'price'=>25000, 'sold' => 20),
				array('brand'=>'VW', 'color'=>'black','price'=>15000, 'sold' => 10),
				array('brand'=>'Jeep', 'color'=>'black', 'price'=>62000, 'sold' => 25),
				array('brand'=>'Audi', 'color'=>'grey', 'price'=>55000, 'sold' => 10),
			);
$sum = 0;
$count = count($cars);
for($i=0; $i < $count;$i++){
	$cars[$i]['profit'] = $cars[$i]['price']*$cars[$i]['sold'];
}
echo "<pre>";
var_dump($cars);
echo "</pre>";
for($j=0; $j<$count; $j++){
	$sum+= $cars[$j]['profit'];
}
echo "sum ".$sum;