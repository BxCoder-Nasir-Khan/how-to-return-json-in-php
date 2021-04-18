<?php 

#how to return json in php



	$data =  array(
		'name' => 'Nasir Khan', 
		'age' => 23,
		'address' => 'Dhaka'
	);

	header('Content-Type: application/json');
	echo json_encode($data);

?>