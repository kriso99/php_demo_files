<?php
function print_text($param1, $param2, $text){
	echo $param1;
	for ($i=0; $i < 10 ; $i++) { 
	echo $text;
	}
	echo $param2;
}
print_text('<p>', '</p>', 'Hello!');
$a = '<h1>';
$b = '</h1>';
$c = 'Bye!';
print_text($a, $b, $c);
$d = "<table border='1'><tr>";
$e = "</tr></table>";
$f = "<td>Hi!</td>";
print_text($d, $e, $f);

