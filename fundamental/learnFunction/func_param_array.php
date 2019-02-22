<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi dengan parameter array</title>
</head>
<body>
    <h3>Contoh program fungsi dengan parameter array</h3>
    <pre>
        function namafungsi(...param) {
            statement 1;
            statement 2;
            statement ...;
        }
    </pre>
    <?php
        function tulisdata(...$arrdata) {
            echo "Data yang akan dijumlahkan : <br>";
            for ($counter=0; $counter < count($arrdata) ; $counter++) { 
                if ($counter > 0) echo ", ";
                echo $arrdata[$counter];
            }

            echo "<br> Jumlahnya adalah = ";
        }

        function jumlahkan(int ...$arrdata):int {
            $jml = 0;
            for ($i=0; $i < count($arrdata) ; $i++) $jml = $jml + $arrdata[$i];
                return $jml;
        }

        // call function
        echo tulisdata(2, 3, 4, 5, 6, 7, 8);
        echo jumlahkan(2, 3, 4, 5, 6, 7, 8)."<br>";
        echo "<br>";
        echo tulisdata(2.6, 3.7, 4, 5.8, 6.7, 7.7, 8.3);
        echo jumlahkan(2.6, 3.7, 4, 5.8, 6.7, 7.7, 8.3)."<br>";

    ?>
</body>
</html>