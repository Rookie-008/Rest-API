<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "dataProduct";
		
		// Create Connection
		$connection = new mysqli($servername, $username, $password, $dbname);
		
		// Check Connection
		if ($connection-connect_error) {
			die("Connection Failed" . $connection->connect_error());
		}
		
		echo "Connected Successfully";
?>
