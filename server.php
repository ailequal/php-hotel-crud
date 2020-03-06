<?php

	include __DIR__ . '/database.php';

	// sql query
	$sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze`";
	$result = $conn->query($sql);

	$array = [];
	if ($result && $result->num_rows > 0) {
	// output data for each row
	while($row = $result->fetch_assoc()) {
		// echo "Room number " . $row['room_number']. " Floor number " . $row['floor'];
		$rooms[] = $row;
		}
	} elseif ($result) {
		echo "No results";
	} else {
		echo "Query error";
	}
	$conn->close();

?>
