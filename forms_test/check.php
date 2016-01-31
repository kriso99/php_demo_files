<?php 
session_start();
echo "Hello, ". $_SESSION['username'].'!';
echo "Hello,". $_SESSION['age']."!";


echo "<a href='logout.php'>logout</a>";
