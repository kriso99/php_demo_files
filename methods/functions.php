<?php 
// 
//$p1 
//$p2
function num_row($p1,$p2){
	if ($p1 > $p2) {
		for ($i=$p1; $i >= $p2 ; $i--) { 
			echo $i.'/';
		}
		} else {
			for ($j=$p1; $j <= $p2 ; $j++) { 
				echo $j.'/';
			}
		}
}

