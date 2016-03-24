<?php 
function arr_gen($row, $col){
	for($i = 0; $i < $row; $i++){
		if($i % 2 == 0){
			$num = 0;
		}
		else {
			$num = 1;
		}
		for($j = 0; $j < $col; $j++){

			$arr[$i][$j] = $num;
			if($num === 0){
				$num = 1;
			}
			else{
				$num = 0;
			}
		}
	}
	echo "<table border=1>";
	for ($m=0; $m < $row; $m++) { 
		echo "<tr>";
		for($n = 0; $n < $col; $n++){
			echo '<td>'.$arr[$m][$n].'</td>';
		}
		echo "</tr>";
	}
	echo "</table>";

}
arr_gen(15, 15);