<?php
$a = rand(0, 10);
$b = rand(0, 10);

echo 'a = '. $a . ' and b = '. $b;

if ($a < $b) {
 	echo '<p>a = '. $a . ' and b = '. $b.'</p>';
 } else {
 	echo '<p>b = '. $b . ' and a = '. $a .'</p>';
 }