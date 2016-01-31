<?php 

$var = rand(1, 8);
echo $var;

switch ($var) {
	case 1:
	case 2:
	case 3:
	case 4:
	case 5:
	echo "Work day";
	break;
	case 6:
	case 7:
	echo "Weekend";
	break;
	default:
	echo "Not a valid weekday";
	break;
}