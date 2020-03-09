<?php
	include __DIR__ . '/../database.php';

	// get new room data from create.php through POST method
	$room_number = $_POST['room_number'];
	$floor = $_POST['floor'];
	$beds = $_POST['beds'];

	// query command
	$sql = "INSERT INTO `stanze` (`room_number`, `floor`, `beds`, `created_at`, `updated_at`) VALUES (?, ?, ?, NOW(), NOW())";
	// prepare and bind
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("iii", $room_number, $floor, $beds);
	// execute conversion
	$stmt->execute();

	$id_room = $stmt->insert_id;
	$conn->close();

	$redirect = $path . 'show/show.php?id=' . $id_room;
	header("Location: $redirect");
?>
