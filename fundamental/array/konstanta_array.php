<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Konstanta array</title>
</head>
<body>
	<?php

		// using define()
		define("HARI", ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]);
		
	?>
	<p> Menampilkan array konstanta</p>

	<?php 
	 	for ($counter=0; $counter < 7 ; $counter++) { 
	 		echo "<br>".($counter+1)."-".HARI[$counter];
	 	}
	 ?>
</body>
</html>