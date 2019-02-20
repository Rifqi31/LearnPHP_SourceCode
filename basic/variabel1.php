<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Variable</title>
</head>
<body>
	<?php
		// create variable
		$var1 = "kwkwkwkw";
		$var2 = 1233113;

		$number1 = 222;
		$number2 = 333;

		// simple call variable
		echo "$var1";
		echo "$var2";

		echo "<br>";

		// another call variable
		echo "<h1>". $var1. "</h1>";
		echo "my laugh $var1";

		echo "<br>";

		// simple operation
		$result = $number1 + $number2;

		echo $number1. "+". $number2. "=". $result;

	?>
</body>
</html>