<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array irisan</title>
</head>
<body>
    <?php 
        echo "<h3> Contoh array_intersect() irisan</h3>";
        $varnum1 = array(1,2,3,4,22,90);
        echo "Array pertama : ";
        print_r($varnum1);
        
        $varnum2 = array("abc", 22, 90);
        echo "<br><br>Array kedua : ";
        print_r($varnum2);

        
        $hasil = array_intersect($varnum1, $varnum2);
        echo "<br>hasil irisan : ";
        print_r($hasil);

    ?>
</body>
</html>