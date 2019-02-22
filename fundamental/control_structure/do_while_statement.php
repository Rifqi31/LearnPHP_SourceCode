<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Do While Statement</title>
</head>
<body>
	<h3>Do While Statement</h3>
	<?php
		$varnum = array(33,-11, 21,-322,-133);
		$bil = 0;
		do {
			// echo $varnum[$bil]."<br>";
			if ($varnum[$bil] % 2 == 0) {

				if ($varnum[$bil] > 0) {

					echo $varnum[$bil]." = adalah bilangan genap dan positif <br>";
				
				} else {

					echo $varnum[$bil]." = adalah bilangan genap tapi negatif <br>";

				}
			

			} elseif ($varnum[$bil] % 2 != 0) {

				if ($varnum[$bil] > 0) {

					echo $varnum[$bil]." = adalah bilangan ganjil dan positif <br>";

				} else {

					echo $varnum[$bil]." = adalah bilangan ganjil tapi negatif <br>";

				}
			}


			$bil = $bil + 1;

		} while($bil <= 4)
	?>
</body>
</html>