<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While Statement</title>
</head>
<body>
    <h3>While Statement</h3>
    <pre>
        while(ekspresi) {
            perintah 1;
            perintah 2;
        }
    </pre>

    <?php
        $varnum = array(33,-11, 21,-322,-133, 0);
        $bil = 0;
        while ($bil <= 5) {
            //echo "$bil";
            // echo $varnum[$bil]."<br>";
            if ($varnum[$bil] % 2 == 0) {
                echo $varnum[$bil]. " = bilangan genap <br>";
            } else {
                echo $varnum[$bil]. " = bilangan ganjil <br>";
            }
            //echo " ";
            $bil = $bil+1;
        }
    ?>
</body>
</html>