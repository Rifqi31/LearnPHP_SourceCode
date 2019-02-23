<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Hasil Perbandingan</title>
</head>
<body>
	<h1>Hasil Perbandingan</h1>
	<hr>
	<?php
		$varnum1 = $_POST["varnum1"];
		$varnum2 = $_POST["varnum2"];
	?>
	<p>Bilangan 1 : <?php echo "$varnum1"; ?>
	<p>Bilangan 1 : <?php echo "$varnum2"; ?>
	<br>
	<?php
		if ($varnum1 > $varnum2) {
			echo "$varnum1 lebih besar dari $varnum2";
		} elseif ($varnum2 > $varnum1) {
			echo "$varnum2 lebih beasr dari $varnum1";
		} else {
			echo "$varnum1 memiliki nilai yang sama dengan $varnum2";
		}
	?>
</body>
</html>