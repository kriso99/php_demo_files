<?php

$m = 5;
$n = 4;
$num = 1;

$arr = array(array());

for($i=0;$i<$m;$i++){
	for($j=0; $j<$n; $j++){
		$arr[$i][$j]=$num;
		$num++;
	}
}

echo "<table border=1>";
for($q = 0; $q<$n; $q++){
	echo "<tr>";
	for($p=0;$p<$m; $p++){
		echo "<td>".$arr[$p][$q]."</td>";
	}
	echo "</tr>";

}

echo "</table>";

