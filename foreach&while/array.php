<?php 

$phone_number = array(
		'John Smith' => '+5555-123-325',
		'Jane Smith' => '+5555-552-996',
		'John Doe' => '+5555-963-514',
		'John' => '+5555-123-325',
		'Jane' => '+5555-552-996',
		'John D' => '+5555-963-514');

	foreach ($phone_number as $name => $phone) {
		echo '<p>'.$name.'-'.$phone.'</p>';
	}
