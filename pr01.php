<?php 
if(isset($_POST['submit'])){
	$veg = array('veg1', 'veg1', 'veg3');
	$meat=array('meat1', 'meat2', 'meat3');
	$menu = $_POST['menu'];
	if($menu === 'veg'){
		echo '<ul>';
		foreach ($veg as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo "</ul>";
	} else {
		echo '<ul>';
		foreach ($meat as $value) {
			echo '<li>'.$value.'</li>';
		}
		echo "</ul>";
	}

} else {
	?>
	<form method="post" action="pr01.php">
		<p>vegetarian</p>
		<input type="radio" name="menu" value="veg">
		<p>meat</p>
		<input type="radio" name="menu" value="meat">
		<input type="submit" name="submit" value="submit">	
	</form>
	<?php
}