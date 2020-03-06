<?php

	include __DIR__ .  '/../database.php';

	// get room id
	if(empty($_POST['id'])) {
		die('Wrong ID');
	}
	$id_room = $_POST['id'];
	// var_dump($id_room);

	// sql query
	$sql = "DELETE FROM `stanze` WHERE `id` =  '$id_room'";
	$result = $conn->query($sql);

	if ($result) {
		// echo "Room deleted";
	} else {
		echo "An error occured while deliting, please try again";
	}
	$conn->close();

?>
