<?php 
		$angleA = $_GET['angleA'];
		$angleB = $_GET['angleB'];
		$angleC = $_GET['angleC'];

		$sum = $angleA + $angleB + $angleC;
		if ($sum == 180) {
			echo 'Valid triangle';
		} else {
			echo 'Not a valid triangle';
		}
