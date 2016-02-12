<?php

$products = array();
$products['shoes'] 	= 50;
$products['jeans'] 	= 60;
$products['shirts'] = 40;
$products['scarf'] 	= 20;
$products['coat'] 	= 80;

echo '<form action="demo1.php" method="post">';
foreach ($products as $pr_name => $pr_price) {
	echo "<label for='prod'>".$pr_name."</label>";
	echo "price".$pr_price;
	echo '<input type="checkbox" name="'.$pr_name.'" value="'.$pr_price.'">';
}
echo '<input type="submit" value="submit">';
echo '</form>';