<?php
	include __DIR__ . '/../functions.php';
	include __DIR__ .  '/../database.php';

	// post room id
	if(empty($_POST['id'])) {
		die('No ID selected');
	}
	$id_room = $_POST['id'];

	// checking room id
	$room = get_by_id($conn, 'stanze', $id_room);

	// sql query for deleting room id
	$sql = "DELETE FROM `stanze` WHERE `id` = '$id_room'";
	$result = $conn->query($sql);
	if (!$result) {
		echo "An error occured while deleting, please try again";
	}
	$conn->close();
?>
