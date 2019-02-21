<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Diff Selisih</title>
</head>
<body>
	<?php

		// array 1
		$varnum1 = array(1,2,11,22,333);
		echo "isi array \$varnum1 <br>";
		print_r($varnum1);

		// array 2
		$varnum2 = array("abc",22,333,1);
		echo "isi array \$varnum2 <br>";
		print_r($varnum2);

		echo "<br>";

		// result
		$hasil_diff = array_diff($varnum1, $varnum2);
		echo "hasil selisih : ";
		print_r($hasil_diff);
	?>
</body>
</html>