<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Else statement</title>
</head>
<body>
    <h3>Contoh If Else statement</h3>
    <pre>
        if (ekspresi) {
            perintah 1;
            perintah 2;
            perintah 3;
        } else {
            perintah 1;
            perintah 2;
            perintah 3;
        }
    </pre>
    <?php
        // initialize variable
        $varnum1 = 5;
        $varnum2 = 7;

        if ($varnum1 > $varnum2) {
            echo "$varnum1 is greater than $varnum2";
        } else {
            echo "$varnum2 is greater than $varnum1";
        }
    ?>
</body>
</html>