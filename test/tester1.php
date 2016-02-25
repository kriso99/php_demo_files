<?php 
$arr = array(
	array('food1', 10, 20, 30, 40),
	array('food2', 15, 20, 25, 30),
	array('food3', 12, 22, 32, 42),
	array('food4', 18, 2, 37, 47),
	array('food5', 15, 25, 35, 45),
	);

$coef = 0;
$count = count($arr);
for ($i=0; $i < $count; $i++) { 
	for ($j=0; $j < 5; $j++) { 
		$arr[$i][5] = ($arr[$i][2]*$arr[$i][2]+($arr[$i][3]+$arr[$i][4]))/$arr[$i][1]*2;
	}
}

for ($p=0; $p <$count ; $p++) { 
	$coef+=$arr[$p][5];
}
$coef_avg = $coef/$count;

echo "<table border=1>";
echo "<tr>
<td>food</td>
<td>cal</td>
<td>gi</td>
<td>fats</td>
<td></td>
<td></td>
</tr>";
for ($k=0; $k < $count; $k++) { 
	echo '<tr>';
	foreach ($arr[$k] as $value) {
		echo "<td>".$value."</td>";
	}
echo "</tr>";
}
echo '</table>';

echo $coef_avg;

$min = $arr[0][2];
$index= 0;

for ($n=0; $n < $count; $n++) { 
	if($arr[$n][2]<$min){
		$min = $arr[$n][2];
		$index = $n;
	}
}
echo $arr[$index][2];
