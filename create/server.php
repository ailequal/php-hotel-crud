<?php

	include __DIR__ . '/../database.php';

	// get new room data from create.php through POST method
	$room_number = $_POST['room_number'];
	$floor = $_POST['floor'];
	$beds = $_POST['beds'];

	// sql query for creating a new room
	$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES ($room_number, $floor, $beds, NOW(), NOW())";
	$result = $conn->query($sql);
	if (!$result) {
		die("An error occured while updating, please try again");
	}
	$id_room = $conn->insert_id;
	$conn->close();


	$redirect = $path . 'show/show.php?id=' . $id_room;
	header("Location: $redirect");

?>
