<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Strings in PHP</title>
</head>
<body>
    <?php
        // example function strlen()
        // length of strings
        echo strlen("Hello World");

        echo "<br>";

        // example function str_word_count()
        // count how many words in strings
        echo str_word_count("Hello World");
    
        echo "<br>";

        // example function strrev()
        // revers strings
        echo strrev("Hello World");

        echo "<br>";

        // example function for strpos()
        // find specific strings
        echo strpos("Hello World", "Hello");

        echo "<br>";

        // example function for str_replace()
        // replace specific strings
        echo str_replace("world", "Natasha Teen", "Hello world");
    ?>
</body>
</html>