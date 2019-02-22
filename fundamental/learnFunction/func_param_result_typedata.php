<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fungsi dengan hasil bertipe data</title>
</head>
<body>
    <h3>Contoh Program dengan hasil bertipe data</h3>
    <pre>
        function namafungsi(tipedataproses parameter) : tipedatahasil {
            statement 1;
            statement 2;
            statement ...;
        }
    </pre>

    <?php
        function tulisdata($numvar1, $numvar2) {
            echo "$numvar1 + $numvar2 = ";
        }

        function jumlah2bil(float $numvar1, float $numvar2) : int {
            return $numvar1 + $numvar2;
        }
    
        // call the function
        echo tulisdata(2.7,3.3);
        echo jumlah2bil(2.7,3.3);
    ?>
</body>
</html>