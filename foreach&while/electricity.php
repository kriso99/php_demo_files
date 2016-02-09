<?php 
$kw = 100;
$smetka = 0;

if($kw > 50) {
	if ($kw > 150) {
		if ($kw > 250) {
			# code...
		} else {

		}
	} else {
		$kw1 = $kw - 50;
		$smetka1 = 50*0.10 + $kw1*0.15;
	}
} else {
	$smetka = $kw*0.10;
}