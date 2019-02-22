<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Built in function</title>
</head>
<body>
    <h3>Contoh fungsi chr untuk index</h3>
    <?php
        for ($counter=0; $counter< 26; $counter++) { 
            echo chr(65+$counter);
            if ($counter < 25) echo " | ";
        }
    ?>
</body>
</html>