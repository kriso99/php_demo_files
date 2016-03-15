<?php 
function greater($p1, $p2){
$a = $p1;
$b = $p2;
if ($a > $b) {
	echo '$b = '.$b .' - '. '$a = '.$a; 
} else {
	echo '$a = '.$a .' - '. '$b = '.$b; 
}
}
greater(15, 9);
greater(15, 99);