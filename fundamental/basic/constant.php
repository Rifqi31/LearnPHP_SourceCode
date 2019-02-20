<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constant in php</title>
</head>
<body>
    <?php
        // example constant in-casensitive is false
        define("LISA", "Lisa in your area!");
        echo LISA;

        echo "<br>";

        // example constant with in-casensitive is true
        define("LISA", "Lisa in your head!", TRUE);
        echo lisa;

        echo "<br>";

        // example constant array
        define("KDA", ["Akali", "Ahri", "Kai'sa", "Evelyn"]);
        for ($i=0; $i <= 3 ; $i++) { 
            echo KDA[$i]. "<br>";
        }

        echo "<br>";

        // constant are global!!
        function myTest() {
            echo lisa;
        }

        myTest();
    ?>
</body>
</html>