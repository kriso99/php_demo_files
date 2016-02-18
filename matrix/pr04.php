<?php 
$arr = array(array());
//rows
$m = 4;
//cols
$n = 4;
$num = 0;
//array numbers in mattrix
for ($i=0; $i <$m ; $i++) { 
	//array values in each array in matrix
	for ($j=0; $j<$n; $j++){
		//$arr[$i][$j] = 1;
		$num++;
		$arr[$i][$j] = $num;
	}
}
echo "<table border='1'>";
for($j=0; $j<$n; $j++){
	echo '<tr>';
	for($i=0; $i<$m; $i++){
		echo "<td>";
		echo $arr[$i][$j];
		echo "</td>";

	}
echo '</tr>';
}
echo "</table>";