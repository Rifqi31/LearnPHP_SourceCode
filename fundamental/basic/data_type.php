<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Type</title>
</head>
<body>
    <?php
        // php support for data type
        /*
            String
            Integer
            Float (floating point numbers - also called double)
            Boolean
            Array
            Object
            NULL
            Resource
        */

        // string
        $var1 = "this suck";
        $var2 = "damn why!";

        echo $var1;
        echo "<br>";
        echo $var2. "<br>";
        echo "<br>";

        // integer
        $varint = 222211;
        var_dump($varint);
        echo "<br>";

        // float
        $varfloat = 123.21;
        var_dump($varfloat);
        echo "<br>";

        // boolean
        // True False

        // array
        echo "<br>";
        $vararray = array("animal", "gore", "canibalism");
        var_dump($vararray);
        echo "<br>";

        // object
        class Car{
            function Car(){
                $this->model = "VW";
            }
        }

        // create an object
        $herbie = new Car();

        // show object properties
        echo $herbie->model;

        // NULL
        $test = "Hello World";
        $test = null;

        echo "<br>";
        var_dump($test);

    ?>
</body>
</html>