<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aritmatika Operator</title>
</head>
<body>
    <?php

        $numvar1 = 222;
        $numvar2 = 333;

        // penjumlahan
        $tambah = $numvar1 + $numvar2;

        // pengurangan
        $kurang = $numvar2 - $numvar1;

        // perkalian
        $kali = $numvar1 * $numvar2;

        // pembagian
        $bagi = $numvar2 / $numvar1;

        // modulus
        $modulus = $numvar2 % $numvar1;

        // print the result
        echo "$numvar1 + $numvar2 = $tambah"."<br>";
        echo "$numvar2 - $numvar1 = $kurang"."<br>";
        echo "$numvar1 * $numvar2 = $kali"."<br>";
        echo "$numvar2 / $numvar1 = $bagi"."<br>";
        echo "$numvar2 % $numvar1 = $modulus"."<br>";

    ?>
</body>
</html>