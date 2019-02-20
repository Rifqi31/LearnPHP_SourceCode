<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ternary Operator</title>
</head>
<body>
    <?php

        // var
        $varnum1 = 10;
        $varnum2 = 7;

        $selisih = ($varnum1 > $varnum2) ? ($varnum1 - $varnum2) : ($varnum2 - $varnum1);
        // same as
        /*if ($varnum1 > $varnum2) {
            $selisih = $varnum1 - $varnum2;
        } else {
            $selisih = $varnum2 - $varnum1;
        }*/

        echo "result : $selisih";

    ?>
</body>
</html>