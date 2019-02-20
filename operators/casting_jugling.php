<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Casting</title>
</head>
<body>
    <?php

        // example of casting and jugling operator
        $var1 = "222";
        $var2 = 222;
        $var3 = "123abc";

        // example of jugling operator
        $result = $var1 + $var1;
        echo $result."<br>";
        echo "$var1 + $var2 = $result";

        $var4 = (int) "123abc";
        
        echo "<br>";
        echo $var3."<br>";
        echo $var4;


    ?>
</body>
</html>