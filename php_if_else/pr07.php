<?php 
//entered in BD
$username = "tiger";
$password = "tiger44";

//user input
$username2 = "tiger";
$password2 = "tiger44";

if ($username2 == $username) {
	if ($password2 == $password) {
		echo "Welcome, $username!";
	} else {
		echo "Wrong password!";
	}
} else {
	echo "Wrong username!";
}

