<?php 

$m = 4; 
$n = 4;
$num = 1;
$num2 = 8;

for ($i=0; $i < $m; $i++) { 
	for($j = 0; $j < $n; $j++){
		$arr[$i][$j] = $num;
		$num+=$num2;
		$num2=$num2*10;
	}
}
echo "<table border ='1px'>";
	for ($q=0; $q<$n; $q++) {
		echo "<tr>";
		for($p=0; $p<$m; $p++) {
				echo "<td>". $arr[$p][$q]."</td>";
		}
		echo "</tr>";
	}
		echo "</table>";
		