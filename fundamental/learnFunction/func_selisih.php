<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UDF Function Selisih</title>
</head>
<body>
    <h3>Contoh UDF (User Defined Function)</h3>
    <pre>
        function namafungsi([parameter]) {
            statement, ...;
            statement, ...;
        }

        pemanggilan fungsi :
        $varhasil = &namafungsi([parameter]);

        tanda '&' tidak mutlak, karena php akan melakukan otomatis bahwa itu fungsi
    </pre>

    <?php
        function selisih($numvar1, $numvar2) {

            $result = 0;

            if ($numvar1 > $numvar2) {
                $result = $numvar1 - $numvar2;
            
            } else {
                $result = $numvar2 - $numvar1;
            }

            return $result;
        }

        // call the function
        $cetakhasil =  &selisih(20, 2);

        echo "$cetakhasil";
    ?>
</body>
</html>