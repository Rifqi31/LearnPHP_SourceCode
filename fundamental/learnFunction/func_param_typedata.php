<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Function Parameter</title>
</head>
<body>
    <h3>Fungsi parameter dengan tipe data</h3>
    <pre>
        function namafungsi(tipedata parameter=nilai) {
            statement 1;
            statement 2;
            ....
        }
    </pre>
    <?php
        define("PHI", 3.14);

        function jari_lingkaran(float $jari2 = 322.2) {
            $result = PHI * $jari2;

            return $result;
        }

        // call function with default param
        $hasil_default = jari_lingkaran();
        // call function with different value
        $hasil_value = jari_lingkaran(111.2);

        echo "hasil dengan default parameter\t: ".$hasil_default."<br>";
        echo "hasil dengan parameter yang berbeda\t: ".$hasil_value."<br>";
    ?>
</body>
</html>