<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operator Eksekusi</title>
</head>
<body>
    <?php
        $shell = `git reflog`;
        echo "<pre>$shell</pre>";
    ?>
</body>
</html>