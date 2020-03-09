<?php
	include __DIR__ . '/../functions.php';
	include __DIR__ . '/../database.php';

	// get room id
	$id_room = $_POST['id'];
	$room_number = $_POST['room_number'];
	$floor = $_POST['floor'];
	$beds = $_POST['beds'];

	// checking room id
	$room = get_by_id($conn, 'stanze', $id_room);

	// query command
	$sql = "UPDATE `stanze` SET `room_number` = ?, `floor` = ?, `beds` = ? WHERE `id` =  ?";
	// prepare and bind
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("iiii", $room_number, $floor, $beds, $id_room);
	// execute conversion
	$stmt->execute();
	$conn->close();

	$redirect = $path . 'show/show.php?id=' . $id_room;
	header("Location: $redirect");
?>
