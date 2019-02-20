<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Local Scope Variable</title>
</head>
<body>

        <?php
            
            function myText() {
                // using x inside this function
                $global_var = 222;
                echo "<b>call the var $global_var </b>";
            }

            myText();

            echo "<br>";

            echo "<b>call the var $global_var </b>";
        ?>

</body>
</html>