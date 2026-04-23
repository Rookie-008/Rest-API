<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP</title>
</head>
<body>

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

</body>
</html>
