<?php 

function my_func($r, $c){
	for($i = 0; $i < $r; $i++){
		for($j = 0; $j <$c; $j++){
			$check = $c - $i -1;
			if($j == $check){
				$arr[$i][$j] = '0';
			}
			else {
				$arr[$i][$j] = '-'; 
			}
		}
	}
echo "<table border=1>";
	for($m = 0; $m < $r; $m++){
		echo "<tr>";
		for($n = 0; $n < $c; $n++){
			echo "<td>".$arr[$m][$n]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
my_func(4, 5);
