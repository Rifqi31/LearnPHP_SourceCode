<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Asosiatif</title>
</head>
<body>
    <?php
        // cara 1
        $homonculus1["Jane"] = 121313618;
        $homonculus2["Sika"] = 838353838;
        $homonculus3["Kaya"] = 227382648;

        echo "isi dari \$homonculus1 adalah ".$homonculus1["Jane"]. "<br>";
        echo "isi dari \$homonculus2 adalah ".$homonculus2["Sika"]. "<br>";
        echo "isi dari \$homonculus3 adalah ".$homonculus3["Kaya"]. "<br>";

        echo "<br>";
        echo "<br>";
        echo "<br>";
        // cara 2
        $breeding_angel = array(
            "Morgana" => 1218186,
            "Kyle" => 11181
        );

        echo "isi dari \$breeding_angel['Morgana'] adalah ". $breeding_angel["Morgana"]. "<br>";
        echo "isi dari \$breeding_angel['Kyle'] adalah ". $breeding_angel["Kyle"]. "<br>";

    ?>
</body>
</html>