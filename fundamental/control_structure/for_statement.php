<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>For Statement</title>
</head>
<body>
    <h3>For Statement</h3>
    <pre>
        for ($c=nilaiawal; $c<=nilaibatasakhir; $c++) {
            perintah 1;
            perintah 2;
        }
    </pre>
    <?php
        $varnum = array(33, 22, 21,-322,-133);
        for ($counter=0; $counter <=4; $counter++) { 
            if ($varnum[$counter] % 2 == 0) {
                echo $varnum[$counter]." = bilangan genap <br>";
            } else {
                echo $varnum[$counter]." = bilangan ganjil <br>";
            }
        }

    ?>
</body>
</html>