<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Incre/Decre Op</title>
</head>
<body>
    <?php

        echo "<h3>Post Increment</h3>";
        $numvar1 = 5;
        echo "\$numvar1 = $numvar1"."<br>";
        echo "Dengan \$numvar1++ tetap 5: ".$numvar1++."<br>\n";
        echo "kemudian menjadi 6: ".$numvar1."<br>\n";

        echo "<h3>Pre Increment</h3>";
        $numvar1 = 5;
        echo "\$numvar1 = $numvar1"."<br>";
        echo "Dengan ++\$numvar1 menjadi 6: ". ++$numvar1. "<br>\n";
        echo "Tetap 6: ".$numvar1."<br>\n";

        echo "<h3>Post Decrement</h3>";
        $numvar1 = 5;
        echo "\$numvar1 = $numvar1"."<br>";
        echo "Dengan \$numvar1-- tetap 5: ".$numvar1--. "<br>\n";
        echo "kemudian menjadi 4: ".$numvar1."<br>\n";

        echo "<h3>Pre Increment</h3>";
        $numvar1 = 5;
        echo "\$numvar1 = $numvar1"."<br>";
        echo "Dengan --\$numvar1 menjadi 4: ".++$numvar1. "<br>\n";
        echo "Tetap 4: ".$numvar1."<br>\n";

    ?>
</body>
</html>