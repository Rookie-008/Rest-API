<?php
	$dbh = new PDO('mysql:host=localhost;dbname=dataProduct', username:'root', password:);
	$db = $dbh->prepare('SELECT * FROM product');
	$db->execute();
	$product = $db->fetchAll(PDO::FETCH_ASSOC);
	
	$data = json_encode($product);
	echo $data;
?>
