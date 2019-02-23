<!DOCTYPE html>
<html lang="en">
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
        $varnum1 = $_GET["varnum1"];
        $varnum2 = $_GET["varnum2"];
    ?>
    <p>Bilangan I : <?php echo $varnum1 ?></p>
    <p>Bilangan II : <?php echo $varnum2 ?></p>
    <br>

    <?php
        if ($varnum1 > $varnum2) {
            echo "<p>$varnum1 lebih besar dari $varnum2</p><br>";
        } elseif ($varnum2 > $varnum1) {
            echo "<p>$varnum1 lebih kecil dari $varnum1</p><br>";
        } else {
            echo "<p>$varnum1 sama dengan $varnum2</p><br>";
        }
    ?>
</body>
</html>