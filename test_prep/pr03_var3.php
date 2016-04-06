<?php 
function my_function($m, $n){
$num = 0;
	for($i = 0; $i < $m; $i++){
		for($j = 0; $j < $n; $j++){
		 //$arr[$i][$j] = $num;
			if ($i==$j) {
				$arr[$i][$j] = '0';
			}
			else {
				$arr[$i][$j] = '-';
			}
			//$num++;
		}
	}
	
	echo "<table border ='1px'>";
	for ($q=0; $q<$m; $q++) {
		echo "<tr>";
		for($p=$n-1; $p>=0; $p--) {
				echo "<td>". $arr[$p][$q]."</td>";
		}
		echo "</tr>";}
		echo "</table>";
		}
	my_function(5, 5);