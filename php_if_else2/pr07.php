<?php 
//saved in db
$username = 'acad';
$password = 'acad2013';


// user input 

$username1 = 'acad';
$password1 = 'acad2013';

if ($username1 == $username) {
	if ($password1 == $password) {
		echo "Welcome, $username!";
	} else {
		echo "Wrong password!";
	}//if/else password
} else {
	echo "Wrong username!";
}//if/else username