<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Assignment Operator</title>
</head>
<body>
    <pre>
        $a = 5;
        $a += 8;
        $str = "Hello ..";
        $str.="Selamat datang di PHP";

        $b = &$a;
        $a = 7;
        $b = &$a;
    </pre>
    <?php

        echo "Numerik !"."<br>";
        $a = 5;
        $a += 8;
        echo "\$a = $a"."<br>";
        echo "String !"."<br>";
        $str = "Hello ..";
        $str.= "Selamat datang di PHP";
        echo "\$str = $str"."<br>";

        // assignment by reference
        // pengisian suatu variable berdasarkan lokasi data
        $b = &$a;
        echo "\$a = $a"."<br>";
        echo "\$b = $b"."<br>";

        $a = 7;
        $b = &$a;
        echo "\$a = $a"."<br>";
        echo "$\b = $b"."<br>";
    ?>
</body>
</html>