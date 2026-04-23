<?php
	$data = file_get_contents('data2.json');
	$product = json_decode($data,true);
	
	var_dump($product);
	
	echo $product[0]["productName"]
	//echo $product[1]["ingredients"]

?>
