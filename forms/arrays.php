<?php 
$data = array(	'first_name' 	=> 'Pesho',
				'second_name'	=> 'Petrov',
				'third_name' 	=> 'Ivanov',
				'age' 			=> 35,
				'profession'	=> 'teacher'
				 );
echo '<table border="1">';
echo '<tr>';
echo '<td>first name - '.$data['first_name'].'</td>';
echo '<td>second name - '.$data['second_name'].'</td>';
echo '<td>third name - '.$data['third_name'].'</td></tr>';
echo '<tr>';
echo '<td>age - '.$data['age'].'</td>';
echo '<td>profession - '.$data['profession'].'</td>';
echo '</tr>';
echo '</table>';


