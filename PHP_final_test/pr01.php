<?php 
// Дефинирайте функция, която замества буквите в думите от дадено 
// изречение със знак – например *, #, _, оставяйки само първата буква
//  от всяка дума и отпечатва преработените  думи в неномериран списък. 
//  Изречението и знакът, с който ще бъдат замествани буквите, 
//се подават през форма. 
// Може да използвате готови рнр функции за работа със стрингове. 
//  
if(empty($_GET['submit'])){
	echo "<form action='pr01.php' method='get'>";
	echo "<input type='text' name='str'>";
	echo "<input type='text' name='sym'>";
	echo "<input type='submit' name='submit' value='code'>";
	echo "</form>";
}
else{
	function code($str, $sym){
		$res = explode(' ', $str);
		$count = count($res);
		for($i = 0; $i < $count; $i++){
			$new_arr[$i] = str_split($res[$i]);
			$word_len[$i] = count($new_arr[$i]);
			for($j = 1; $j < $word_len[$i]; $j++){
				$new_arr[$i][$j] = $sym;
			}
		}
		echo "<ul>";
		for($m = 0; $m < $count; $m++){
			echo "<li>";
			// for($n = 0; $n < $word_len[$m]; $n++ ){
			// 	echo $new_arr[$m][$n].' ';
			// }
			$current_str = implode(' ',$new_arr[$m]);
			echo $current_str;
			echo "</li>";
		}
		echo "</ul>";
	}//end of func
$user_str = $_GET['str'];
$user_sym = $_GET['sym'];
code($user_str, $user_sym);

}


