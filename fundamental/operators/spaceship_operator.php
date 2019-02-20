<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Spaceship operator</title>
</head>
<body>
    <?php

        // example of spacheship operator
        // -1 if left value less than in right value
        // 0 if left and right have same value
        // 1 if left value more value than in right value

        // -1
        echo 2 <=> 8;
        echo "<br>";
        // 0 
        echo 2 <=> 2;
        echo "<br>";
        // 1
        echo 8 <=> 2;
    ?>
</body>
</html>