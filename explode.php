<?php 

$str = '1 2 85 [[[[ pfogigj ;;pp;';
$res = explode('g', $str);

echo '<pre>';
var_dump($res);
echo "</pre>";


$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $res);
echo $comma_separated;