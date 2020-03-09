<?php
	include __DIR__ . '/../functions.php';
	include __DIR__ . '/../database.php';

	// get room id
	if(empty($_GET['id'])) {
		die('No ID selected');
	}
	$id_room = $_GET['id'];
	
	$room = get_by_id($conn, 'stanze', $id_room);
	$conn->close();
?>
