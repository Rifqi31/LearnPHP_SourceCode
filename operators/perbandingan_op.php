<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        $numvar1 = 222;
        $numvar2 = 333;

        if ($numvar1 == $numvar2) {
            
            echo "sama dengan";

        } elseif ($numvar1 < $numvar2) {
            
            echo "kurang dari";

        } elseif ($numvar1 > $numvar2) {

            echo "lebih besar dari";

        } elseif ($numvar1 <= $numvar2) {

            echo "kurang dari atau sama dengan";

        } elseif ($numvar1 >= $numvar2) {
            
            echo "lebih besar dari atau sama dengan";

        } elseif ($numvar1 != $numvar2) {

            echo "bukan sama dengan";

        } elseif ($numvar1 !== $numvar2) {
            
            echo "tidak identik";
        }
    ?>
</body>
</html>