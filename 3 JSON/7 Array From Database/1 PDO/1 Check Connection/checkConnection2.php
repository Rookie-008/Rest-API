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
		
		try {
			$connection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
			$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			echo "Connection Succesfully";
		} catch(PDOException $dataError) {
			eho "Connection Failed: " .$dataError->getMessage();
		}
?>

</body>
</html>
