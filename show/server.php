<?php

	include './database.php';

	// get room id
	$id_room = $_GET['id'];

	// sql query
	$sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze` WHERE `id` =  $id_room";
	$result = $conn->query($sql);

	if ($result && $result->num_rows > 0) {
		$room = $result->fetch_assoc();
	} elseif ($result) {
		echo "No results";
	} else {
		echo "Query error";
	}
	$conn->close();

	var_dump($room);
?>
