<?php
	
	include '../env.php';

	// create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// check connection
	if ($conn && $conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
	}

?>
