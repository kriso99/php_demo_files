<?php 


// Задача 2. Дефинирайте функция, която определя дали 
// годината е високосна или не. За да е високосна,
// годината трябва да се дели на 4, 
// но ако се дели на 100 не е високосна, с изключение на случая ако се дели на 400.  4т.

function is_leap($year){
	if($year % 4 == 0){
		if($year % 100 == 0){
			if($year % 400 == 0){
				echo "is leap";
			}
			else {
				echo "not a leap year";

			}
		}
		else {
				echo "is leap";

		}
	}
	else {
		echo "not a leap year";
	}
}
is_leap(1600);