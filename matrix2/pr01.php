<?php 
$cars = array(array('brand'=>'VW', 'model'=>'polo', 'price'=>15000, 'sold'=>20),
			array('brand'=>'Skoda', 'model'=>'Yeti','price'=>25000,'sold'=>30),
			array('brand'=>'HONDA', 'model'=>'Civic', 'price'=>35000, 'sold'=>10),
				);
$count = count($cars);
$sum = 0;
for($j=0; $j<$count;$j++){
	$cars[$j]['profit']=$cars[$j]['price']*$cars[$j]['sold'];
	$sum += $cars[$j]['profit'];
}
/*echo '<pre>';
var_dump($cars);
echo '</pre>';*/
echo '<table border="1">';
echo "<tr>";
echo "<td>car -No</td>
	<td>brand</td>
	<td>model</td>	
	<td>price</td>
	<td>sold</td>
	<td>profit</td>";
echo "</tr>";
for($i=0; $i<$count; $i++){
	$n=$i+1;
	echo "<tr><td>car $n</td>";
	foreach($cars[$i] as $value){
		echo "<td>".$value."</td>";
	}
	echo "</tr>";

}
echo '</table>';
echo $sum.' profit'; 