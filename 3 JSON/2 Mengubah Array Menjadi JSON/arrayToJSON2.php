<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP in HTML</title>
</head>
<body>

	<?php
		$product = [
			[ 	
				"productName" => "Wedang Jahe",
				"idProduct" => "679325",
				"ingredients" => "Jahe"
			],
		
			[ 	
				"productName" => "Wedang Jahe",
				"idProduct" => "593412",
				"ingredients" => "Kencur"
			]
		];
	
		//var_dump($product);
	
		$data = json_encode($product);
		echo $data
	
		//echo json_encode($product, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
	?>

</body>
</html>
