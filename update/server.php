<?php

	include __DIR__ . '/../database.php';

	// get room id
	$id_room = $_POST['id'];
	$room_number = $_POST['room_number'];
	$floor = $_POST['floor'];
	$beds = $_POST['beds'];

	// sql query for checking room id
	$sql = "SELECT * FROM `stanze` WHERE `id`='$id_room'";
	$result = $conn->query($sql);
	if ($result && $result->num_rows == 0) {
		die('Wrong ID, no matching room found');
	} 

	// sql query for updating room id
	$sql = "UPDATE `stanze` SET `room_number` = $room_number, `floor` = $floor, `beds` = $beds WHERE `id` =  '$id_room'";
	$result = $conn->query($sql);
	if (!$result) {
		echo "An error occured while updating, please try again";
	}

	$conn->close();

	$redirect = $path . 'show/show.php?id=' . $id_room;
	header("Location: $redirect");

?>
