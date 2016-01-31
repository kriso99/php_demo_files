<?php 
session_set_cookie_params('300');
session_start();

	$_SESSION['username'] = $_POST['username'];
	$_SESSION['age'] = 15;

echo "Hello,". $_SESSION['username']."!";
echo "Hello,". $_SESSION['age']."!";
echo '<a href="check.php">check session</a>';