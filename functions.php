<?php
	function get_all($conn, $table) {
		// sql query selecting all the rows in the table
		$sql = "SELECT * FROM $table";
		// $sql = "SELECT `id`, `room_number`, `floor`, `beds` FROM `stanze`";
		$result = $conn->query($sql);
	
		if ($result && $result->num_rows > 0) {
			// store every row inside the array
			$rooms = [];
		while($row = $result->fetch_assoc()) {
			$rooms[] = $row;
			}
		} elseif ($result) {
			echo "No results";
		} else {
			echo "Query error";
		}
		$conn->close();
		return $rooms;
	}
?>