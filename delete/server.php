<?php

	include __DIR__ .  '/../database.php';

	// post room id
	if(empty($_POST['id'])) {
		die('No ID selected');
	}
	$id_room = $_POST['id'];

	// sql query for checking room id
	$sql = "SELECT * FROM `stanze` WHERE `id`='$id_room'";
	$result = $conn->query($sql);
	if ($result && $result->num_rows == 0) {
		die('Wrong ID, no matching room found');
	} 

	// sql query for deleting room id
	$sql = "DELETE FROM `stanze` WHERE `id` =  '$id_room'";
	$result = $conn->query($sql);
	if (!$result) {
		echo "An error occured while deleting, please try again";
	}

	$conn->close();

?>
