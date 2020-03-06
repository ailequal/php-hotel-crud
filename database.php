<?php
	
	include __DIR__ . '/env.php';

	// create connection
	$conn = new mysqli($server_name, $user_name, $password, $database_name);
	// check connection
	if ($conn && $conn->connect_error) {
		echo "Connection failed: " . $conn->connect_error;
	}

?>
