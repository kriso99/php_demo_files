<?php 
	function my_func($m, $n) {
$num=11;
$c= 11;
	$arr =array(array());
	for ($i=0; $i<$m; $i++) {
		for($j=0; $j<$n; $j++){
			$arr[$i][$j]=$num;
			$num=$c+$num;

		}
		$c=$c*10+1;
		$num=$c;

	}

echo "<table border=1>";
for ($s=0; $s < $m; $s++) { 
	echo "<tr>";
	for ($q=0; $q < $n; $q++) { 
		echo "<td>".$arr[$s][$q]."</td>";
	}
	echo "</tr>";
}
echo "</table>";
	}

my_func(5,6);