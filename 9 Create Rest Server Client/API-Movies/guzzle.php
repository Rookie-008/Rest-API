<?php  

	require 'vendor/autoload.php';

	use GuzzleHttp\Client;

	$client = new Client ();

	$response = $client->request('GET', 'http://omdbapi.com', [
		'query' => [
			'apikey' => '352d2c5a',
			's' => 'avengers'
		]
	]);

	// var_dump($response->getBody()->getContents());
	// echo $response->getBody()->getContents();

	$result = json_decode ($response->getBody()->getContents(), true);
	// var_dump($result);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MOVIE</title>
</head>
<body>

	<ul>
		<?php foreach ($result['Search'] as $movie) : ?>
			<li>Title : <?php echo $movie['Title']; ?></li>
			<li>Year : <?php echo $movie['Year']; ?></li>
			<li>
				<img src="<?php echo $movie['Poster']; ?>"  width="100" >
			</li>
		<?php endforeach; ?>

	</ul>

</body>
</html>