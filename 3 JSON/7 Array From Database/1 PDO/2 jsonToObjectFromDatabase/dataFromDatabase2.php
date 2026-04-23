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
		
		$dbh = new PDO('mysql:host=localhost;dbname=$dbname', $username, $password);
		$db = $dbh->prepare('SELECT * FROM product');
		$db->execute();
		$product = $db->fetchAll(PDO::FETCH_ASSOC);
	
		$data = json_encode($product);
		echo $data;
	?>

</body>
</html>
