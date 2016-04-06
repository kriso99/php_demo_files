<?php 

function match($c,$find){
   $res=preg_match($find,$c);
   echo $find."is found".$res."times";
}

if (empty($_GET['check'])) {
 	
echo "<p>Check if some word is in entered text bellow:";
echo "<form action='pr01.php' method='get'>";
echo "<p>Enter the text</p>";
echo "<input type='text' name='check' placeholder='enter some text...'>";
echo "<p>Enter the word you want to check if is there : </p>";
echo "<p><input type='text' name='check_word' placeholder='enter the word...'></p>";
echo "<input type='submit' name='submit' value='go'>";
echo "</form>";
}else{
	$word=$_GET['check_word'];
match($_GET['check'],"/$word/");
echo "</p>"; 
}

?>