<?php 
	
	function my_function($m, $n){
	$c=110;
	$arr=array(array());
	for ($i=0; $i<$n; $i++) {
		$num=7+$c*$i;
		for($j=0; $j<$m; $j++) {
			$arr[$i][$j]=$num;
			$num=7+$num;
		}
		
		
	}
	echo "<table border ='1px'>";
	for ($q=0; $q<$n; $q++) {
		echo "<tr>";
		for($p=0; $p<$m; $p++) {
				echo "<td>". $arr[$p][$q]."</td>";
		}
		echo "</tr>";}
		echo "</table>";
		}
	my_function(5, 5);
		?>