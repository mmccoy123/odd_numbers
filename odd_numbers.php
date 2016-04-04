<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Odd Numbers</title>
</head>
<body>
	<?php

		$odd_numbers = array();

		for( $i = 1; $i <= 20000 ; $i += 2){
			array_push($odd_numbers, $i);
		}

		var_dump($odd_numbers);

	?>
</body>
</html>