<?php
	
	include 'env.php';

	// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// check connection
	if ($conn && $conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
	}

	// sql query
	$sql = "SELECT `room_number`, `floor`, `beds` FROM `stanze`";
	$result = $conn->query($sql);
	$array = [];
	if ($result && $result->num_rows > 0) {
	// output data for each row
	while($row = $result->fetch_assoc()) {
		// echo "Room number " . $row['room_number']. " Floor number " . $row['floor'];
		$array[] = $row;
		}
	} elseif ($result) {
		echo "0 results";
	} else {
		echo "query error";
	}
	$conn->close();
?>
