<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array union merge</title>
</head>
<body>
    <?php 
        echo "<h3> Contoh array_merge()</h3>";
        $varnum1 = array(1,2,3,4,22,90);
        echo "Array pertama : ";
        print_r($varnum1);
        
        $varnum2 = array("abc", 22, 90);
        echo "<br><br>Array kedua : ";
        print_r($varnum2);

        
        $hasil = array_merge($varnum1, $varnum2);
        echo "<br><br>setelah digabung: ";
        print_r($hasil);
        

        // contoh untuk array_unique jika ada value yang sama
        $unique_result = array_unique($hasil);
        echo "<br><br>setelah menggunakan array_unique() <br>";
        print_r($unique_result);

    ?>
</body>
</html>